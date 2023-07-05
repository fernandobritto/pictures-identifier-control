'use strict'

const AWS = require('aws-sdk')
const translator = new AWS.Translate()

const translateText = async (text) => {
  const params = {
    SourceLanguageCode: 'en',
    TargetLanguageCode: 'pt',
    Text: text
  }

  const { TranslatedText } = await translator.translateText(params).promise()

  return TranslatedText.split(' e ')
}

module.exports = { translateText }
