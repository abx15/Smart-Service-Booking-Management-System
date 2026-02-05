# API Documentation

## Overview

This document outlines the RESTful API endpoints for the Smart Service Booking System.

**Base URL:** `https://api.smartbooking.com/v1`

## Authentication

All API requests requiring authentication must include the Bearer Token in the header.

**Header Format:**

```
Authorization: Bearer {token}
```

## Endpoints

### 🔐 Authentication

| Method | Endpoint         | Description                    |
| :----- | :--------------- | :----------------------------- |
| `POST` | `/auth/login`    | User login                     |
| `POST` | `/auth/register` | User registration              |
| `POST` | `/auth/logout`   | User logout                    |
| `POST` | `/auth/refresh`  | Refresh access token           |
| `GET`  | `/auth/user`     | Get authenticated user details |

### 🛠️ Services

| Method   | Endpoint         | Description                             |
| :------- | :--------------- | :-------------------------------------- |
| `GET`    | `/services`      | List all available services             |
| `GET`    | `/services/{id}` | Get details of a specific service       |
| `POST`   | `/services`      | Create a new service (Provider only)    |
| `PUT`    | `/services/{id}` | Update existing service (Provider only) |
| `DELETE` | `/services/{id}` | Remove a service (Provider only)        |

### 📅 Bookings

| Method   | Endpoint         | Description                |
| :------- | :--------------- | :------------------------- |
| `GET`    | `/bookings`      | List user's bookings       |
| `POST`   | `/bookings`      | Create a new booking       |
| `GET`    | `/bookings/{id}` | Get booking details        |
| `PUT`    | `/bookings/{id}` | Update booking information |
| `DELETE` | `/bookings/{id}` | Cancel/Delete a booking    |

### 📂 Categories

| Method | Endpoint           | Description                   |
| :----- | :----------------- | :---------------------------- |
| `GET`  | `/categories`      | List all service categories   |
| `GET`  | `/categories/{id}` | Get specific category details |

### ⭐ Reviews

| Method   | Endpoint        | Description     |
| :------- | :-------------- | :-------------- |
| `GET`    | `/reviews`      | List reviews    |
| `POST`   | `/reviews`      | Submit a review |
| `PUT`    | `/reviews/{id}` | Edit a review   |
| `DELETE` | `/reviews/{id}` | Delete a review |

## Response Formats

### Success

```json
{
  "success": true,
  "data": { ... },
  "message": "Operation successful"
}
```

### Error

```json
{
  "success": false,
  "error": {
    "code": "ERROR_CODE",
    "message": "Description of the error",
    "details": { ... }
  }
}
```

## Advanced Usage

### Rate Limiting

- **IP Limit:** 100 requests per minute
- **User Limit:** 1000 requests per hour

### Pagination

Append `page` and `limit` query parameters:

```
GET /services?page=1&limit=20
```

### Filtering & Sorting

Examples of common filters:

```
GET /services?category_id=1&status=active&min_price=100&max_price=500
```
