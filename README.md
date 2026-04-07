# PHP Task Manager API – Assignment

## 🎯 Problem Statement

You are required to build a simple PHP-based API to manage student tasks.

Each task has:

* `id` (integer)
* `title` (string)
* `status` (pending/completed)

---

## 📌 Requirements

### 1. Add Task

* Input: title
* Output: JSON response
* Auto-generate ID

---

### 2. List Tasks

* Return all tasks in JSON format

---

### 3. Update Task Status

* Input: task ID + status
* Status must be:

  * `pending`
  * `completed`

---

### 4. Delete Task

* Input: task ID

---

## 📌 Constraints

* Use **pure PHP (no frameworks)**
* Store data in `tasks.json`
* Handle invalid inputs properly
* Return proper JSON responses

---

## 📌 API Format

Use query parameters:

### Add Task

`index.php?action=add&title=Test Task`

### List Tasks

`index.php?action=list`

### Update Task

`index.php?action=update&id=1&status=completed`

### Delete Task

`index.php?action=delete&id=1`

---

## ⚠️ Important

* Do NOT modify test files
* Ensure all test cases pass
* Handle edge cases:

  * Invalid ID
  * Missing parameters

---

## ⏱️ Time Limit

90 minutes

---

## ✅ Evaluation Criteria

* Functionality
* Code structure
* Input validation
* Edge case handling
