const express = require("express");
const router = express.Router();
const Booking = require("../models/Booking");

// POST: Lưu lịch hẹn mới
router.post("/", async (req, res) => {
  try {
    const { name, phone, service, date, notes } = req.body;
    const newBooking = new Booking({ name, phone, service, date, notes });
    await newBooking.save();
    res.status(201).json({ message: "✅ Buchung gespeichert!" });
  } catch (err) {
    console.error(err);
    res.status(500).json({ message: "❌ Fehler beim Speichern" });
  }
});

module.exports = router;
