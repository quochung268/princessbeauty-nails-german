const mongoose = require("mongoose");

const bookingSchema = new mongoose.Schema({
  name: String,
  phone: String,
  service: String,
  date: Date,
  notes: String,
  createdAt: {
    type: Date,
    default: Date.now,
  },
});

module.exports = mongoose.model("Booking", bookingSchema);
