const express = require("express");
const mongoose = require("mongoose");
const dotenv = require("dotenv");
const bookingRoutes = require("./routes/booking");
const cors = require("cors");

dotenv.config();
const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(express.json());
app.use(express.static("public")); // Để phục vụ HTML/CSS
app.use("/api/booking", bookingRoutes);

mongoose
  .connect(process.env.MONGODB_URI, {
    useNewUrlParser: true,
    useUnifiedTopology: true,
  })
  .then(() => console.log("✅ MongoDB verbunden"))
  .catch((err) => console.error("❌ Fehler bei MongoDB:", err));

app.listen(PORT, () => {
  console.log(`🚀 Server läuft auf http://localhost:${PORT}`);
});

const bookingRoutes = require("./routes/booking");
app.use("/api/booking", bookingRoutes);
