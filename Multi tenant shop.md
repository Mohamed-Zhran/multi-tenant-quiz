# Multi-tenant Shop

## Relationships

### Tenant
1. Has many users
2. Has many products
### User
1. Belongs to one tenant
2. Has Many orders
### Product
1. Belongs to one tenant
2. Belongs to many orders
### Orders
1. Belongs to one user
2. Belongs to many products


## Endpoints

1. Get tenant users
```
/api/tenants/{id}/users
```
