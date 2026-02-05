# User Roles & Workflows Guide

This guide details the user roles, features, and operational workflows within the Smart Service Booking Management System.

## 👤 User Roles

The application supports three distinct user roles, each with specific capabilities and dashboards.

### 1. Customer (User)

The end-user seeking services.

- **Capabilities**:
    - Browse and search for Residential & Commercial services.
    - View detailed service descriptions and pricing.
    - Book services for specific dates and times.
    - Manage profile and address.
    - Track booking history and live status.
    - Access a personal dashboard.

### 2. Service Provider (Worker)

The professional executing the services.

- **Capabilities**:
    - Apply via the Careers page.
    - Access **Worker Dashboard** (post-verification).
    - View assigned bookings and job specifics.
    - Manage availability status.
    - Track earnings and job history.
    - Profile verification management.

### 3. Administrator (Super Admin)

The platform overseer.

- **Capabilities**:
    - **Dashboard**: Monitor platform health, users, bookings, and revenue.
    - **Service Management**: Full CRUD for categories and services.
    - **Booking Management**: Assign workers, update statuses, view all bookings.
    - **Worker Management**: Verify applications, manage worker profiles.
    - **Content Management**: Update static pages (FAQs, About, etc.).

---

## 🛠 Features Overview

### Smart Booking System

- **Scheduling**: User-selected dates and times.
- **Categorization**: Separation of Residential vs. Commercial bookings.
- **Status Tracking**: Live updates (Pending -> Confirmed -> In Progress -> Completed).

### Dashboards

- **Customer**: Usage history and upcoming appointments.
- **Worker**: Job queue, earnings report, schedule.
- **Admin**: Operational oversight and control center.

### Job Application Portal

- Public-facing career application form.
- Admin-side review and approval workflow.

---

## 📋 Services Catalog

The system supports various service categories:

- **Plumbing**: Repairs, Drain Cleaning, Water Heater Service.
- **Cleaning**: Deep Cleaning, Sofa Shampoos, Bathroom Sanitization.
- **Electrical**: Fan Installation, Wiring Checks, Switch Repairs.
- **Painting**: Wall Painting, Touch-ups.
- **Moving**: Local Shifting, Furniture Assembly.
- **Gardening**: Lawn Mowing, Planting.

---

## 🔄 Workflows

### Customer Journey

1.  **Register/Login**: Create an account.
2.  **Browse**: Find desired service under Residential/Commercial.
3.  **Book**: Select service -> Choose Slot -> Confirm.
4.  **Track**: Monitor status via Dashboard.

### Service Provider Journey

1.  **Apply**: Submit application on `/careers`.
2.  **Verify**: Wait for Admin approval.
3.  **Onboard**: Log in to Worker Dashboard.
4.  **Execute**: Receive job -> View Details -> Complete Job.
5.  **Earn**: View payment records.

### Administrator Workflow

1.  **Monitor**: Daily check of bookings and applications.
2.  **Assign**: Allocate verified workers to new bookings.
3.  **Manage**: Update booking statuses and service listings.
