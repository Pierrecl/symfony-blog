# symfony-blog :+1:

### 1. After git clone :

`php composer.phar self-update`
`php composer.phar update`

### 2. After dependencies loaded :

Parameters.yml is already define and work with "blog" database.

`php bin/console doctrine:schema:validate`
`php bin/console doctrine:schema:update --force`

### 3. After database' schema created:

**Important for create Admin User**.

`php bin/console doctrine:fixtures:load`

### 4. After user created :

import dump sql in working database

### 5. Last Step :

`php bin/console server:run`
