# The Master’s Touch Store

The Master’s Touch Store is a web-based art store that allows users to browse and view artistic paintings through a clean and user-friendly interface.  
The project is fully Dockerized to ensure easy setup, consistency, and reproducibility for any developer.

---

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Getting Started](#getting-started)
- [Installation (Docker)](#installation-docker)
- [Configuration](#configuration)
- [How to Use](#how-to-use)
- [Project Structure](#project-structure)
- [Development Notes](#development-notes)
- [About](#about)

---

## Overview
The Master’s Touch Store is an online art store designed to showcase artistic paintings in an organized and visually appealing way.  
The application is built using PHP for backend logic and standard web technologies for the frontend.  
Docker is used to containerize the application, making it easy to run on any system without manual environment configuration.

---

## Features
- Display a collection of artistic paintings
- Clean and responsive user interface
- Dynamic content rendering using PHP
- Client-side interactivity using JavaScript
- Organized and professional project structure
- Fully Dockerized application

---

## Technology Stack
- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Web Server:** Apache
- **Containerization:** Docker and Docker Compose
- **Version Control:** Git and GitHub
- **Platform:** Cross-platform (Windows, Linux, macOS)

---

## Getting Started
This project can be run locally using Docker.  
No manual server setup is required, as all services run inside Docker containers.

---

## Installation (Docker)
Clone the repository and navigate to the project folder:

```bash
git clone https://github.com/WafaaObaid/The-Masters-Touch-Store.git
cd The-Masters-Touch-Store

# Build and run using Docker Compose
docker-compose up --build

# Open in browser
Open http://localhost:8080  
The landing page (index.html) will load first.

# Stop and clean up
docker-compose down


## Configuration
- The application runs on port 80 inside the Docker container
- Port 8080 is exposed on the host machine
- No additional environment variables are required
- Database configuration (if used) is handled in connectDB.php

## How to Use
- Open http://localhost:8080 in a web browser
- Browse the available art paintings
- View artwork details
- Interact with the store interface

## Project Structure
The-Masters-Touch-Store/
├── src/
│   ├── Homepage.php
│   ├── ContactUs.php
│   ├── haveAcc.php
│   ├── haveAccLogic.php
│   ├── login.php
│   ├── connectDB.php
│   ├── signup.php
│   ├── style.css
│   ├── style2.css
│   ├── script.js
│   ├── script2.js
│   └── images/
│
├── docs/
│   ├── notes.md
│   └── screenshots/
│
├── Dockerfile
├── docker-compose.yml
├── .dockerignore
├── .gitignore
└── README.md

## Development Notes
- All application source code is located inside the src directory
- Documentation and screenshots are stored in the docs directory
- Docker ensures consistent behavior across different development environments
- Biggest Docker challenge: setting up MySQL database initialization
- Git/GitHub lesson: keeping the project organized and reproducible for any developer

## About
This project was created for educational purposes to demonstrate a Dockerized PHP web application with proper Git workflow and project structure.