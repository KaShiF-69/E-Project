<?php
include 'connect.php';

// ===============================
// USERS TABLE
// ===============================

// Total normal users
$q_user = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users WHERE role='user'");
$total_users = mysqli_fetch_assoc($q_user)['total_users'];

// Total staff
$q_staff = mysqli_query($conn, "SELECT COUNT(*) AS total_staff FROM users WHERE role='staff'");
$total_staff = mysqli_fetch_assoc($q_staff)['total_staff'];


// ===============================
// REVIEWS TABLE (feedback)
// ===============================
$q_reviews = mysqli_query($conn, "SELECT COUNT(*) AS total_reviews FROM feedback");
$total_reviews = mysqli_fetch_assoc($q_reviews)['total_reviews'];


// ===============================
// CONTACT FORM TABLE (contact_us)
// ===============================
$q_contact = mysqli_query($conn, "SELECT COUNT(*) AS total_contacts FROM contact_us");
$total_contacts = mysqli_fetch_assoc($q_contact)['total_contacts'];
?>