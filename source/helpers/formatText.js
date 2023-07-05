'use strict'

const formatText = (texts, workingItems) => {
  const finalText = []
  for (const indexText in texts) {
    const nameInPortuguese = texts[indexText]
    const confidence = workingItems[indexText].Confidence
    finalText.push(`${confidence.toFixed(2)}% de ser do tipo ${nameInPortuguese}`)
  }
  return finalText.join('\n')
}

module.exports = { formatText }
