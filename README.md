# Livewire Sort Example

> Example usage of the livewire sort component package.

To run the example,

-   Clone the repository

-   Ensure to have cloned the `Livewire Sort` component package

-   In the `composer.json`, change the `url` in the section below to the folder path where the package is domiciled.

```json
{
  "scripts": { ... },

  "repositories": [
    {
      "type": "path",
      "url": "relative/path/to/package"
    }
  ]
}
```

-   Run

```shell
composer install
npm install
npm run dev
```

-   Configure the project's database connection and run database migrations

-   Seed the database with the `UserSeeder`

-   Visit the root path of the application to view the sort component in action.
