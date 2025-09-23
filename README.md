<div align="center">
  <h1>Framework Based Programming - EF234501 (2025)</h1>
</div>

<p align="center">
  <b>Institut Teknologi Sepuluh Nopember</b><br>
  Sepuluh Nopember Institute of Technology
</p>

<p align="center">
  <img src="docs-assets/Badge_ITS.png" width="50%">
</p>

<p>This project is a personal blog website application developed using Laravel as part of the Assignments for the Framework Based Programming class. This web application is created by <a href="https://github.com/aleahfaa">Iffa Amalia Sabrina</a>.</p>

On behalf of:

**Agus Budi Raharjo, S.Kom., M.Kom., Ph.D.**

---

## Logs
### Week-2
I created the new pages in views also adding all new pages to route (web.php), so the new pages can be accessed. For the blog-detail page, I use route wildcard and `{id}` is the wildcard that I use. Below are the preview of the pages I have created.
1. Home Page
![Home](docs-assets/week-2/home.png)
2. Blog Page
![Blog](docs-assets/week-2/blog.png)
3. Blog Detail Page
![Blog-Detail](docs-assets/week-2/blog-detail.png)
4. Contact Page
![Contact](docs-assets/week-2/contact.png)
### Week-3
I add components architecture and Tailwind CSS to make it more maintainable and upgrade the design system. Previously, I use the inline HTML in blade files and right now in my code there are reusable Blade components (`x-card`, `x-icon`, `x-navigation`, `x-article-meta`). Below are the preview of the pages with upgraded design system that I have created.
1. Home Page
![Home](docs-assets/week-3/home.png)
2. Blog Page
![Blog](docs-assets/week-3/blog.png)
3. Blog Detail Page
![Blog-Detail](docs-assets/week-3/detail.png)
4. Contact Page
![Contact](docs-assets/week-3/contact_1.png) <br>
![Contact-2](docs-assets/week-3/contact_2.png) <br>
### Week-4
I add database migrations, models, factories, and seeders. In migrations, I define several columns, such as id, title, description, published_at, image, and content, for articles table. In models, I make the title, description, image, and content table as fillable and I also set the date in timestamp of created_at and updated_at to be the date in published_at. In factory, I generate 10 fake data for testing. The seeder, I use to populate the database use factories. I also change the route of the blog and blog detail so it will take the data from the database. Below are the documentation and the preview of the article pages with fake data in database:
1. Migration
![Migration](docs-assets/week-4/migrate.png)
2. Seeders
![Seeders](docs-assets/week-4/seed.png)
3. Blog Page
![Blog](docs-assets/week-4/blog.png)
4. Blog Detail Page
![Blog-Detail](docs-assets/week-4/blog-detail.png)
### Week-5
I add controller, named routes, and pagination. Controller is to manage the flow of data between `Models` and `Views` and keep the routes clean and readable. Named routes is to makes route reference flexible, so if the URL change we only need to update the route definition. Pagination is to splits large datasets into pages. Below is the preview of the blog or article page with pagination:
![Pagination](docs-assets/week-5/pagination.png)

## Tech Stack
- HTML
- PHP
- Laravel
- CSS
- Tailwind CSS
- JavaScript
- SQLite

## Acknowledgements
Thanks to [Net Ninja](https://www.youtube.com/@NetNinja), I can complete this project by following the tutorial in [this playlist](https://youtube.com/playlist?list=PL4cUxeGkcC9gF5Gez17eHcDIxrpVSBuVt&si=xobMN30LE_HB06g_)