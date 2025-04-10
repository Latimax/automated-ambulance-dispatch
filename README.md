
  # ADMA: Ambulance Dispatch Management Application

  ## Overview

  The Ambulance Dispatch Management Application (ADMA) is designed to efficiently manage ambulance services, helping administrators dispatch ambulances, handle service requests, update locations, and manage drivers. 

  ## Features

  - **Make Ambulance Request**: Users can submit requests for ambulance services, ensuring quick access to necessary medical transport.
  - **Dispatch Ambulance**: Admins have the ability to dispatch ambulances based on incoming requests.
  - **Attending Requests**: Admins manage and attend to incoming requests to ensure efficient response times.
  - **Update Locations**: The application provides functionality for updating the current locations of ambulances, enhancing tracking and dispatch accuracy.
  - **Add Drivers**: Administrators can add and manage driver information, ensuring the fleet is always ready for emergencies.

  ## Installation and Setup

  1. **Clone the Repository**
     ```bash
     git clone <repository-url>
     cd hosting/adma
     ```

  2. **Database Setup**
     - Import `adman.sql` to your database system to set up the necessary tables and data.

  3. **Server Setup**
     - Use XAMPP or another PHP server tool to host the files.
     - Place the files under your server's public directory, e.g., `/htdocs` for XAMPP.

  4. **Configuration**
     - Edit `includes/db.php` to match your database connection details.

  ## Usage

  - **Access the Application**
    - Navigate to `http://localhost/adma/index.php` to access the home page.
  
  - **Admin Login**
    - Username: `admin`
    - Password: `admin`
    - Use these credentials to log into the admin dashboard and manage operations.

  ## File Structure

  - **assets/**: Contains CSS, JavaScript, images, libraries, and SCSS files.
  - **includes/**: Contains authentication, database configuration, and middleware scripts.
  - **PHP Files**: Core application files handling different features such as user management and request handling.

  ## Contact

  For any issues or contributions, please contact the development team. We welcome feedback and suggestions to improve the application.

