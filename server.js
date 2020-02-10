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
mongoose.connect('mongodb+srv://admin:admin@cluster-g8agh.mongodb.net/test?retryWrites=true&w=majority', { useNewUrlParser: true, useUnifiedTopology: true })
requireDir('./src/models')

// Routes
app.use('/api', require('./src/routes'))


// localhost: Door
app.listen(2020)