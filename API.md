# API Documentation

## Base URL
```
https://api.smartbooking.com/v1
```

## Authentication

### Bearer Token Authentication
```
Authorization: Bearer {token}
```

## Endpoints

### Authentication
- `POST /auth/login` - User login
- `POST /auth/register` - User registration
- `POST /auth/logout` - User logout
- `POST /auth/refresh` - Refresh token
- `GET /auth/user` - Get current user

### Services
- `GET /services` - List all services
- `GET /services/{id}` - Get service details
- `POST /services` - Create service (Provider)
- `PUT /services/{id}` - Update service (Provider)
- `DELETE /services/{id}` - Delete service (Provider)

### Bookings
- `GET /bookings` - List user bookings
- `POST /bookings` - Create booking
- `GET /bookings/{id}` - Get booking details
- `PUT /bookings/{id}` - Update booking
- `DELETE /bookings/{id}` - Cancel booking

### Categories
- `GET /categories` - List categories
- `GET /categories/{id}` - Get category details

### Reviews
- `GET /reviews` - List reviews
- `POST /reviews` - Create review
- `PUT /reviews/{id}` - Update review
- `DELETE /reviews/{id}` - Delete review

## Response Format

### Success Response
```json
{
  "success": true,
  "data": {},
  "message": "Operation successful"
}
```

### Error Response
```json
{
  "success": false,
  "error": {
    "code": "ERROR_CODE",
    "message": "Error description",
    "details": {}
  }
}
```

## Rate Limiting
- 100 requests per minute per IP
- 1000 requests per hour per authenticated user

## Pagination
```
?page=1&limit=20
```

## Filtering
```
?category_id=1&status=active&min_price=100&max_price=500
```
