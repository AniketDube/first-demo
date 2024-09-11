Attractive content/Service in the Website- Attract lost of Traffic
so you can

Show Ads - get revenue from AD owners
Charge Subscription for the service you provide


Youtube - AD, Subscription
Netflix - Subscription

Web->Revenue-> AD-> Sales Revenue

Web service itself is a Digital Product - Subscription
Web will show Product Ad and customer can purchase the Product - ADS

Sales & Purchase - E-commerce

Roles & Responsibilities
--------------------------

Super Admin
    - Maintain Website - MVP
    - Release new Features/Updates - MVP
    - Manage Users - TASK
Vendor
    - Authentication
        - Signup
            - UI
                username
                password
                confirm password
                usertype     

                Process: Onsubmitting the form verify both the passwords are same,else throw an error           
            - API
                Read all the user info
                Connect to DB
                insert the details in to DB                
            - DB
                userid - INT,AI
                username - varchar(20) - unique
                password - varchar(100)
                usertype - varchar(15)
                createddate - timestamp , default as current_timestamp
                active_status -boolean, default 1
        - Login
            UI
                username
                password
            API
                receive login credentials(username,password)
                make DB connection
                search for the credentials match in DB
                if matched rows>0 - login success
                else - login failed
            DB
                login activity-logger - optional

    - Manage Products - MVP
        Add
        View
        Edit
        Delete
    - Manage the Orders - TASK
    - View Analytics - Optional
Customer
    - Authentication
    - View Products - MVP
    - Compare Products - Optional
    - Manage Cart - MVP
        Add
        View
        Edit
        Delete
    - Place Order - MVP/TASK
        
    - Payment - COD
    - Rating & Review - TASK
    - Claim Refund - Optional
    - View Order History - Optional
    - Track Orders - Optional

Delivery Partner
    - View Order confirmation from Vendor
    - Update the Delivery Status
Customer care
    - View Refund Requests
    - View Complaints
    - Chat with Customer

MVP in Product
Unique Selling Point(USP)