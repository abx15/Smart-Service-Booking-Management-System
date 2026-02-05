# Documentation Restructuring Plan

## Goal

Clean up the project root by organizing scattered markdown files into a structured `docs/` folder, separating API and Role-based documentation, and creating a professional `README.md` entry point.

## Proposed Changes

### 1. Directory Structure

Create a `docs/` directory to house comprehensive documentation.

### 2. File Organization & Consolidation

#### Root Directory

- **`README.md`**: Update to be the main landing page. It will contain:
    - Project Title & Badges
    - Brief Description
    - Quick Links to `docs/`
    - Developer Info
    - License & Acknowledgments
- **`LICENSE`**: Keep.
- **`CODE_OF_CONDUCT.md`**, **`CONTRIBUTING.md`**, **`SECURITY.md`**, **`CHANGELOG.md`**: Keep in root as per standard open-source conventions (or move to `.github` if preferred, but root is standard).

#### `docs/` Directory

- **`docs/API_DOCUMENTATION.md`**:
    - Source: `API.md`
    - Content: Detailed API endpoints (Service, Booking, Auth).
- **`docs/USER_ROLES_AND_WORKFLOWS.md`**:
    - Source: `APP_OVERVIEW.md`
    - Content: Detailed breakdown of Admin, Provider, Customer roles and their specific workflows.
- **`docs/INSTALLATION_AND_SETUP.md`**:
    - Source: Merge of `HOW_TO_START.md`, `SETUP_CMDS.md`, `RUN_COMMANDS.md`.
    - Content: Step-by-step installation, environment setup, and running commands.
- **`docs/DEPLOYMENT.md`**:
    - Source: `DEPLOYMENT.md`
    - Content: Production and Docker deployment guides.
- **`docs/TESTING_CREDENTIALS.md`**:
    - Source: `LOGIN_DETAILS.md`
    - Content: Default login credentials for testing.
- **`docs/TROUBLESHOOTING.md`**:
    - Source: `TROUBLESHOOTING.md`
- **`docs/PERFORMANCE.md`**:
    - Source: `PERFORMANCE.md`

### 3. Deletion of Redundant Files

After migration, delete:

- `API.md`
- `APP_OVERVIEW.md`
- `HOW_TO_START.md`
- `SETUP_CMDS.md`
- `RUN_COMMANDS.md`
- `LOGIN_DETAILS.md` (moved content)
- `PROJECT_SUMMARY.md` (redundant)
- `UPGRADE.md` (if irrelevant, otherwise move to docs)

## Verification Plan

1.  **File Existence Check**: Verify `docs/` contains all new files.
2.  **Content Check**: Read `README.md` to ensure links to `docs/` work (visually check paths).
3.  **Root Check**: Ensure root is clean of "clutter" files.
