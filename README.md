# 🌍 Weather Forecasting Web App (PHP + MySQL + OpenWeatherMap)

## 📌 Project Concept
This project is a **weather forecasting web application** built with **PHP, MySQL, and the OpenWeatherMap API**.  
The app allows users to:
- Add city names to a database
- Fetch live weather data (temperature, humidity, wind speed, description)
- Display results with a clean interface using Bulma CSS
- Delete cities from the list when no longer needed

The main idea is to combine **database management** with **real-time API integration** so users can store their favorite cities and instantly check the weather.

---

## 🚀 Features
- ✅ Add and delete cities in the database  
- ✅ Fetch live weather data from OpenWeatherMap API  
- ✅ Display weather details with icons and styling  
- ✅ Automatic database and table creation (`IF NOT EXISTS`)  
- ✅ Responsive design with Bulma CSS  

---

## 🛠️ Technologies Used
- **PHP** → Application logic and API integration  
- **MySQL** → Database to store city names  
- **OpenWeatherMap API** → Provides live weather data  
- **Bulma CSS** → Clean and responsive design  
- **XAMPP** → Local server environment (Apache + MySQL)  

---

## ⚙️ Setup Instructions
1. Install **XAMPP** and start **Apache** + **MySQL**.  
2. Place the project folder in:  
3. Create a database named **WeatherDB** (or let `db_init()` create it automatically).  
4. Open `index.php` and add your OpenWeatherMap API key:  
```php
$apiKey = "YOUR_OPENWEATHERMAP_API_KEY";
5. Run the project in your browser:
http://localhost/weather_Forcasting/index.php
