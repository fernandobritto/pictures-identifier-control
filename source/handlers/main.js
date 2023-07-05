'use strict'

const path = require('path')
const AWS = require('aws-sdk')
// const { get } = require('axios')
const rekognition = new AWS.Rekognition()
const {
  promises: { readFile }
} = require('fs')

const { MESSAGES } = require('../constants')

const { translateText } = require('../helpers/translateText')
const { formatText } = require('../helpers/formatText')

const handler = async ({ event }) => {
  const errors = []

  try {
    const imgBuffer = await readFile(path.join(__dirname, '../../pictures/yorkshire.jpg'))
    const { names, workingItems } = await detectImageLabels(imgBuffer)
    const texts = await translateText(names)
    const finalText = formatText(texts, workingItems)

    return {
      statusCode: 200,
      body: JSON.stringify({
        message: finalText
      })
    }
  } catch (error) {
    console.error(error)
    return {
      errors,
      success: false,
      statusCode: 500,
      body: JSON.stringify({
        message: (error && error.message) || MESSAGES.SERVER_ERROR
      })
    }
  }
}

const detectImageLabels = async (buffer) => {
  const result = await rekognition
    .detectLabels({
      Image: { Bytes: buffer }
    })
    .promise()

  const workingItems = result.Labels.filter(({ Confidence }) => Confidence > 80)

  const names = workingItems.map(({ Name }) => Name).join(' and ')

  return { names, workingItems }
}

// const getImageBuffer = async (imageUrl) => {
//   const response = await get(imageUrl, {
//     responseType: 'arraybuffer'
//   })
//   const buffer = Buffer.from(response.data, 'base64')
//   return buffer
// }

module.exports = { handler }
