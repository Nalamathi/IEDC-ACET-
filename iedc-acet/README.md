# IEDC – ACET Homepage (Starter Project)

A responsive homepage starter for the Innovation and Entrepreneurship Development Centre at Akshaya College of Engineering and Technology.

## Requirements
- XAMPP with Apache and PHP
- A code editor such as Visual Studio Code
- A modern web browser

## Run locally
1. Install and open XAMPP.
2. Start **Apache** from the XAMPP Control Panel.
3. Copy the `iedc-acet` folder into `C:\xampp\htdocs\`.
4. Open a browser and visit `http://localhost/iedc-acet/`.
5. Edit files in VS Code, save, and refresh the browser.

This first homepage does not need MySQL yet. The contact form is a front-end demo only: it does not send or store messages. PHP/MySQL integration can be added in the next stage.

## Main files
- `index.php`: homepage sections
- `includes/header.php`: document head and navigation
- `includes/footer.php`: footer
- `assets/css/style.css`: colors, layout and responsive styling
- `assets/js/main.js`: mobile navigation and demo form validation
- `assets/images/`: starter SVG logo and hero illustration

## Before publishing
- Replace the sample logo if your college has an official IEDC logo.
- Verify the college's official name, approved descriptions, coordinator details and contact information.
- Replace example activity cards with actual approved events.
- Connect the contact form to a PHP handler and database before collecting real enquiries.
- Use HTTPS and secure hosting for a public deployment.
