# Smart Service Booking Management System - Application Guide

Welcome to the **Smart Service Booking Management System**, a comprehensive web application designed to bridge the gap between service providers (workers) and customers seeking home and commercial services. This document outlines the application's functionality, available services, user roles, and detailed workflows.

---

## 📖 Table of Contents

1. [Introduction](#introduction)
2. [User Roles & Access](#user-roles--access)
3. [Key Features](#key-features)
4. [Services Offered](#services-offered)
5. [How It Works (Workflow)](#how-it-works-workflow)
    - [For Customers](#for-customers)
    - [For Service Providers (Workers)](#for-service-providers-workers)
    - [For Administrators](#for-administrators)
6. [Technical Highlights](#technical-highlights)

---

## 1. Introduction

The Smart Service Booking System is an online platform that simplifies the process of finding and booking professional services. Whether you need a plumber, cleaner, electrician, or mover, this app connects you with verified professionals. It features a seamless booking experience, real-time status updates, and dedicated dashboards for all user types.

---

## 2. User Roles & Access

The application caters to three distinct user types, each with a tailored experience:

### 👤 Customer (User)

- **Role**: The end-user looking for services.
- **Capabilities**:
    - Browse and search for services (Residential & Commercial).
    - View service details, pricing, and descriptions.
    - Book services for specific dates and times.
    - Manage personal profile and address details.
    - View booking history and current status.
    - Access a personal dashboard.

### 🛠️ Service Provider (Worker)

- **Role**: The professional performing the service.
- **Capabilities**:
    - Apply for jobs via the Careers page.
    - Access a dedicated **Worker Dashboard** (upon verification).
    - View assigned bookings and job details.
    - Manage availability and profile.
    - Track earnings and completed jobs.
    - Verify their status with the platform.

### 🛡️ Administrator (Super Admin)

- **Role**: Platform manager.
- **Capabilities**:
    - **Dashboard**: Overview of platform health (users, bookings, revenue).
    - **Service Management**: Create, edit, and delete service categories and offerings.
    - **Booking Management**: View all bookings, assign workers, and update statuses.
    - **Worker Management**: Verify new workers, manage existing ones, and handle job applications.
    - **Content Management**: Manage static pages (About, FAQ, etc.).

---

## 3. Key Features

### 📅 Smart Booking System

- **Easy Scheduling**: Users can select their preferred date and time slots.
- **Service Specifics**: Bookings are categorized (e.g., Residential vs. Commercial) to ensure the right team is assigned.
- **Status Tracking**: Real-time updates on booking status (Pending, Confirmed, In Progress, Completed).

### 📊 Interactive Dashboards

- **User Dashboard**: Central hub for customers to see upcoming appointments and past history.
- **Worker Dashboard**: Focused on job execution, showing schedule and earnings.
- **Admin Dashboard**: High-level view for operational control.

### 📢 Job Application Portal

- Integrated **Careers** section allowing professionals to apply to join the platform.
- Admin workflow to review and approve these applications.

---

## 4. Services Offered

The platform currently supports a wide range of categories, populated with specific services:

### 🚿 Plumbing

- **General Plumbing Repair**: Fixing leaks, taps, and pipe issues ($80).
- **Drain Cleaning**: Professional unclogging of drains and sewers ($120).
- **Water Heater Repair**: Service and repair for water heating units ($150).

### 🧹 Cleaning

- **Full House Deep Cleaning**: Comprehensive cleaning for the entire home ($200).
- **Sofa Cleaning**: Specialized shampooing and cleaning for furniture ($50).
- **Bathroom Cleaning**: Deep sanitization and scrubbing ($40).

### ⚡ Electrical

- **Fan Installation**: Mounting and wiring of ceiling/wall fans ($30).
- **Switchboard Repair**: Fixing faulty electrical points ($25).
- **Full House Wiring Check**: Safety inspection of home electrical systems ($100).

### 🎨 Painting

- **Wall Painting**: Fresh paint or repainting per room ($150).
- **Touch-up Painting**: Fixing small patches and wall damage ($80).

### 🚚 Moving

- **Local Shifting**: Assistance with moving items within the city ($300).
- **Furniture Assembly**: Professional assembly/disassembly service ($60).

### 🌿 Gardening

- **Lawn Mowing**: Grass trimming and lawn maintenance ($50).
- **Planting Service**: Soil preparation and planting ($40).

---

## 5. How It Works (Workflow)

### For Customers

1.  **Registration**: Sign up for an account to get started.
2.  **Browse**: Navigate through "Residential" or "Commercial" services on the home page.
3.  **Select**: Choose a specific service (e.g., "Sofa Cleaning") to view details and price.
4.  **Book**: Click "Book Now," select a time slot, and confirm the booking.
5.  **Track**: Go to the **Dashboard** to see the booking status updates.

### For Service Providers (Workers)

1.  **Apply**: Submit an application via the `/careers` page.
2.  **Verification**: Wait for Admin approval and account verification.
3.  **Onboarding**: Once approved, log in to the **Worker Dashboard**.
4.  **Work**: Receive booking assignments, view customer details, and complete jobs.
5.  **Earn**: Track payments and completed jobs in the "Earnings" section.

### For Administrators

1.  **Monitor**: check incoming bookings and job applications daily.
2.  **Manage**: assign verified workers to new bookings.
3.  **Update**: Mark bookings as completed once the worker finishes the job.
4.  **Maintain**: Update service prices or descriptions as market needs change.

---

## 6. Technical Highlights

- **Framework**: Built on **Laravel**, ensuring robust security and performance.
- **Frontend**: Utilizes **Blade Templates** for dynamic server-side rendering.
- **Database**: **MySQL** database with a structured schema for Users, Services, and Bookings.
- **Security**: Role-based access control (RBAC) ensures data privacy between Users, Workers, and Admins.
