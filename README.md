# Customer Support Ticketing System

## Introduction
**Customer Support Ticket Management System** is to be able to track the issues related to the projects. In this system, we will have admin users who can manage customers and members. Customers can create issues and manage them. They can also set the status. Depending on issues, sub-tasks can be created and can assign a respective member by customers or members. As members, they can manage sub-tasks and status. Issues and sub-tasks can only be deleted admin users.

## Features

- **User Registration and Login**  
Users can register to the system with email and password and user information. But, admin users will activate them to get access to the system. Admin user can assign them as a customer or a developer. If a user is a customer, they must have to be assigned in a company.
- **Company**  
A company can have many users. But a user can only has a company. Under a company, there will be projects and their tickets. The respective member of a company can see their respective projects.
- **Projects**  
Admin user can create the projects. When they create a project, they can assign the developers and customers. Only assigned developers and customers can get access the project’s tickets and subtasks.
- **Tickets**
All the user can create tickets under a project. Only respective members of a project can be assigned to the tickets.
- **Creating sub-tasks**  
All the user can create subtask under a ticket. Only respective members of a project can be assigned to the subtask.
- **User Management**  
Admin user can create, edit and delete the users. Also they can assign the users to the projects.

## Prerequisites
- Node.js(version 18.16.1)
- React(version 18.2.0)
- Tailwindcss(version 0.4.2)
- Sustand(version 4.3.8)
- Vite(version 4.3.9)

## How to Use

## Installation

1.Clone this repository to your local machine.
```bash
git clone https://repos.aceplusbeta.com/b2b/talent-pool/cs-ticket-management-system-react.git
```
2.Navigate to the project directory
```bash
cd ticket-management-system
```
3.Install the project dependencies
```bash
npm install
```
4.Set up your database and update the configuraton in ` 'config.js'`   with your database connection details.

## Usage
1. Run the application
```bash
npm run dev
```
2. **Access the System:** Open your web browser and navigate to `localhost:5173` to access the Ticket Management System.
3. **Register/Login:** Create an account or log in to an existing one to start using the system.
4. **Project Overview:** After logging in, you'll land on the project page. Here, you can get an overview of your tickets. If you have an admin role, you can create new projects and manage all projects.
5. **Creating Tickets:** To create a new ticket, click on "Create Ticket." Provide details such as title, description, and priority.
6. **Viewing/Editting Tickets:** Click on any ticket to view its details. You can also edit or delete tickets from this page.
7. **Assigning Tickets:** Edit a ticket to assign it to a user or team member. You can also change the status and priority of the ticket.
8. **Managing Subtasks:** Similar to tickets, you can create subtasks for more detailed tracking. Subtasks can be edited, assigned, and managed like regular tickets.
9. **Logout:** Remember to log out when you're finished using the system to ensure security.


