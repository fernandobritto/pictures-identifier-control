const express = require("express")
const mongoose = require("mongoose")
const requireDir = require("require-dir")
const cors = require("cors")

// Start application
const app = express()


// allow sending in JSON format
app.use(express.json())

// allow access
app.use(cors())


// Start Database
mongoose.connect('mongodb//localhost:27017/produktkatalog-api', { useNewUrlParser: true })
requireDir('./src/models')

// Routes
app.use('/api', require('./src/routes'))


// localhost: Door
app.listen(7025)