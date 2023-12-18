Digital TU Dublin is an interactive PHP project designed for tourists and visitors interested in exploring the Grangegorman campus of TU Dublin. This application allows users to learn about the history or nature of the campus through an engaging digital experience. Users begin their journey by scanning a QR code, with no registration required, and the site uses cookies for session management.

Features
QR Code Entry: Start the journey by scanning the QR code at the campus entrance.
No Registration Required: The application uses cookies for session tracking, eliminating the need for user registration.
Choice of Themes: Users can choose to learn about either the history or nature of the campus.
Customizable Time Length: Users can select how long they want their data to be remembered for enhancing user experience.
Interactive Learning: On reaching different buildings, users can scan QR codes to access audio narratives, text, and images related to each location.

Technical Focus:
The project primarily demonstrates handling cookies in PHP for session management and user preferences.

Getting Started(in order to use this, you need to create a database first):

CREATE DATABASE IF NOT EXISTS tu_dublin;
USE tu_dublin;


CREATE TABLE IF NOT EXISTS user (
    user_id INT AUTO_INCREMENT PRIMARY KEY
    -- Add additional user fields here if needed
);


CREATE TABLE IF NOT EXISTS user_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    user_location VARCHAR(255),
    user_experience VARCHAR(255),
    user_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);
