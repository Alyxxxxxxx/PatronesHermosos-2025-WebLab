# Patrones Hermosos 2025 — Full-Stack CRUD Application

## Project Overview

**Patrones Hermosos 2025** is a full-stack web application developed through a collaborative educational initiative between the **MIT Geospatial Lab** and **Tecnológico de Monterrey**. This project is part of the *Patrones Hermosos* program, dedicated to empowering young women in STEM by fostering technical proficiency and leadership through hands-on software development. The application demonstrates a robust Create, Read, Update, Delete (CRUD) system, integrating modern web technologies to deliver a scalable, maintainable, and user-centric solution.

This repository serves as a showcase of best practices in full-stack development, emphasizing clean code, modular design, and secure data management. It is designed for educational purposes, offering a practical foundation for students and developers exploring web application architecture.

## Technical Architecture

The application follows a client-server model, leveraging industry-standard technologies to ensure performance, security, and maintainability.

### Frontend
- **Technologies**: Semantic HTML5, modular CSS3, and vanilla JavaScript (ES6+).
- **Features**: Responsive, accessible, and intuitive user interface with dynamic data rendering.

### Backend
- **Technologies**: PHP for server-side logic and handling data validation
- **Features**: Implements core CRUD operations with robust error handling and input sanitization.

### Database
- **Technology**: MySQL relational database management system.
- **Structure**: Predefined schema with SQL scripts for initialization and seeding.

## Repository Structure

The repository is organized for clarity and ease of use, with each component clearly defined:

| Component       | Description                                                  |
|-----------------|--------------------------------------------------------------|
| `css/`          | Modular stylesheets for consistent visual design and layout. |
| `agregar.php`   | Handles creation (INSERT) of new records in the database.    |
| `db.php`        | Configures and establishes the database connection.          |
| `editar.php`    | Facilitates editing (UPDATE) of existing database records.   |
| `eliminar.php`  | Implements deletion (DELETE) of records securely.            |
| `index.php`     | Main interface for viewing records (READ) with pagination.   |
| `sql.sql.txt`   | SQL script to set up the database schema and seed initial data. |

## Setup and Deployment

Follow these steps to deploy the application locally or in a production environment:

### Prerequisites
- Web server (e.g., Apache) with PHP support (version 7.4 or higher recommended).
- MySQL server (version 5.7 or higher).
- Git for cloning the repository.

### Installation Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Alyxxxxxxx/PatronesHermosos-2025-WebLab.git
   ```

2. **Set Up the Database**:
   - Import the `sql.sql.txt` file into your MySQL server to create the `mi_mundo` database and populate it with initial data:
     ```bash
     mysql -u root -p mi_mundo < sql.sql.txt
     ```

3. **Configure Database Connection**:
   - Edit `db.php` to match your database credentials:
     ```php
     $conexion = new mysqli("localhost", "root", "", "mi_mundo");
     ```
     - **Parameters**:
       - **Server**: `localhost` (or your server’s hostname).
       - **User**: `root` (or your MySQL username).
       - **Password**: `""` (update with your MySQL password).
       - **Database**: `mi_mundo`.

4. **Deploy the Application**:
   - Place the repository files in your web server’s document root (e.g., `/var/www/html` for Apache or equivalent for XAMPP/WAMP).
   - Ensure the server is running with PHP and MySQL enabled.

5. **Access the Application**:
   - Open a web browser and navigate to:
     ```
     http://localhost/PatronesHermosos-2025-WebLab
     ```

## Contribution Guidelines

Contributions are encouraged to enhance the project’s functionality and educational value. To contribute:
1. Fork the repository and create a feature branch.
2. Submit pull requests with clear descriptions of changes.
3. Report bugs or suggest improvements via GitHub Issues.

All contributions must adhere to the project’s code of conduct and align with its educational mission to promote diversity and inclusion in STEM.

## Licensing

This project is licensed under the **MIT License**. See the `LICENSE` file for details.

## Acknowledgments

**Patrones Hermosos 2025** was developed under the guidance of the **MIT Geospatial Lab** and **Tecnológico de Monterrey**. We extend our gratitude to the mentors, instructors, and participants of the *Patrones Hermosos* initiative for their commitment to advancing technical education and empowering the next generation of women leaders in STEM.

## Contact

For inquiries or support, please contact the repository maintainers via GitHub Issues or reach out to the *Patrones Hermosos* program coordinators at MIT Geospatial Lab or Tecnológico de Monterrey.
