# Contributing to Smart Service Booking Management System

Thank you for your interest in contributing to our project! This guide will help you get started.

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+
- MySQL or SQLite

### Setup Instructions
1. Fork the repository
2. Clone your fork locally
3. Install dependencies: `composer install && npm install`
4. Copy `.env.example` to `.env` and configure
5. Run migrations: `php artisan migrate`
6. Start development server: `php artisan serve`

## Development Guidelines

### Code Style
- Follow PSR-12 standards
- Use Laravel Pint for code formatting
- Write clear, descriptive commit messages
- Add comments for complex logic

### Testing
- Write tests for new features
- Ensure all tests pass: `php artisan test`
- Aim for high code coverage

### Pull Request Process
1. Create a feature branch from main
2. Make your changes
3. Add tests if applicable
4. Update documentation
5. Submit a pull request with detailed description

## Reporting Issues

When reporting bugs, please include:
- PHP and Laravel versions
- Steps to reproduce
- Expected vs actual behavior
- Error messages/stack traces

## Feature Requests

We welcome feature suggestions! Please:
- Check existing issues first
- Provide clear use case
- Consider implementation complexity

## Code of Conduct

Please be respectful and professional in all interactions.

Thank you for contributing! 🚀
