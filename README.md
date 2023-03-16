<p align="center">
<a href="https://github.com/Queopius/framework/blog"><img src="https://github.com/Queopius/blog/actions/workflows/test.yml/badge.svg" alt="Build Status"></a>
<a href="https://github.com/Queopius/framework/blog"><img src="https://github.com/Queopius/blog/actions/workflows/pint.yml/badge.svg" alt="Build Status"></a>
<a href="https://github.com/Queopius/framework/blog"><img src="https://github.com/Queopius/blog/actions/workflows/phpstan.yml/badge.svg" alt="Build Status"></a>
<a href="https://github.com/Queopius/framework/blog"><img src="https://github.com/Queopius/blog/actions/workflows/phpinsights.yml/badge.svg" alt="Build Status"></a>
</p> 


# Simple Api Blog

Mini application for a test.
## Requirements

- PHP 8.0.2 in local
- Composer installed. If possible version 2+.
- Node installed to be able to install in the application the javascripts, css packages and compress them.

This is all now 🤞🏽 fingers.

### Installation

Installation is very simple.

Clone, or download the application from github locally.

Clone the file `.env.example` with the name `.env`.

Install all the packages required for the internal operation of the application with: 

```bash
composer install
```

Install the node packages so that all the necessary files are available and compressed. The Frontend depends on them, if you don't add CDN's of course.

```bash
npm install && npm run dev
```

Add the KEY of the application with the command;

```bash
php artisan key:generate
```

The application makes use of custom disks for image storage, to make a proper use you have to roll the command: 

```bash
// This command will create a symbolic link in the public folder allowing to make the images visible.
php artisan storage:link
```

Remember to create the database on your MySql server and add them to your .env file.
Then surround the command,

```bash
php artisan migrate
```

Y

```bash
php artisan migrate:fresh --seed
``` 

The first command is used to insert the tables in your local database and the second command is used to generate the Fakers data.

The application should be working.

## Packages used

- **[laravel/ui](https://github.com/laravel/ui)**
To generate an authentication with Bootstrap.

- **[spatie/laravel-data](https://github.com/spatie/laravel-data)**
For the typing of the required data through the forms.

- **[laravel/pint](https://github.com/laravel/pint)**
Verify code style with PHP-CS-Fixer.

- **[nunomaduro/larastan](https://github.com/nunomaduro/larastan)**
Verify code analysis.

- **[nunomaduro/phpinsights](https://github.com/nunomaduro/phpinsights)**
Analysis of code quality and coding style. Beautiful overview of code architecture and it's complexity.

## Tests

TDD (Test Driven Development) tests were performed for the list of posts for the WEB, the detail of a post and the Api for the Http Get method (to get all the posts).

```bash
php artisan test
```


Postman was tested with the Api.

```bash
// Obtain from the posts the respective authors
{
    "code": 200,
    "message": "OK",
    "data": [
        {
            "id": 1,
            "author_id": 2,
            "title": "Est voluptate consequatur aut et consequatur at.",
            "slug": "Est-voluptate-consequatur-aut-et-consequatur-at",
            "excerpt": "Optio iure rem quisquam suscipit. Sed maiores voluptatibus natus voluptatum et. Quod nihil numquam sed amet aliquid. Praesentium ipsa sequi fuga consequuntur est.",
            "body": "Ut sit ea placeat nesciunt nisi fugit. Quidem eligendi excepturi enim repudiandae quae. Ullam tempora impedit qui vero.",
            "published_at": "2022-07-16T21:34:06.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 2,
                "name": "Amelia Ankunding",
                "email": "cydney.stokes@example.org",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "(680) 759-3539",
                "address": "6543 Windler Knoll\nRosendotown, WA 72974-1259",
                "website": "http://www.boyle.com/et-assumenda-non-rerum-maiores.html",
                "company": "Weissnat Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 2,
            "author_id": 2,
            "title": "Totam optio odit adipisci culpa omnis vitae.",
            "slug": "Totam-optio-odit-adipisci-culpa-omnis-vitae",
            "excerpt": "Aut est est omnis qui omnis vel beatae. Magni aliquam sint est cumque provident velit tenetur aut. Consequatur quaerat et similique quibusdam in. Et accusantium id quaerat et.",
            "body": "Qui qui quibusdam aspernatur ad dolorem saepe debitis. Amet alias aut ratione accusantium voluptatem aliquam.",
            "published_at": "2022-04-02T15:06:54.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 2,
                "name": "Amelia Ankunding",
                "email": "cydney.stokes@example.org",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "(680) 759-3539",
                "address": "6543 Windler Knoll\nRosendotown, WA 72974-1259",
                "website": "http://www.boyle.com/et-assumenda-non-rerum-maiores.html",
                "company": "Weissnat Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 3,
            "author_id": 5,
            "title": "Nobis quidem quis totam doloribus rerum quae id.",
            "slug": "Nobis-quidem-quis-totam-doloribus-rerum-quae-id",
            "excerpt": "Deleniti quo voluptatem voluptatem dignissimos molestiae harum quos. Eos in debitis culpa voluptatem nostrum. Ea necessitatibus recusandae rerum dolore et.",
            "body": "Laboriosam aliquam ut dicta eos voluptatum laudantium. Quaerat nesciunt omnis quam corporis. Incidunt corrupti modi nisi officia consequatur. Tempore nihil quas quia aperiam numquam.",
            "published_at": "2023-01-23T09:30:02.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 5,
                "name": "Dr. Adriel Reinger DDS",
                "email": "cabshire@example.net",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "802-503-6214",
                "address": "19074 Juston Gardens\nAricview, OH 07620-7334",
                "website": "http://gislason.com/",
                "company": "Heidenreich, Braun and Brown",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 4,
            "author_id": 7,
            "title": "Iusto omnis aspernatur enim officia.",
            "slug": "Iusto-omnis-aspernatur-enim-officia",
            "excerpt": "Ipsa temporibus omnis consequatur corrupti consequatur. Maiores et omnis vitae et. Iusto quia aperiam corporis velit voluptatibus amet omnis consequuntur.",
            "body": "Eius hic molestiae magni repellendus. Quod sed ea eum excepturi expedita. Occaecati in quos reprehenderit sunt cum alias quia voluptatibus.",
            "published_at": "2023-02-01T19:29:12.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 7,
                "name": "Prof. Jevon Friesen",
                "email": "lueilwitz.rhoda@example.net",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "+1.650.468.1118",
                "address": "455 Gutkowski Mews\nNew Kylie, ME 63920-2796",
                "website": "http://www.feest.info/",
                "company": "Bode-Mann",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 5,
            "author_id": 1,
            "title": "Dolorem et molestiae quo.",
            "slug": "Dolorem-et-molestiae-quo",
            "excerpt": "Dolorum aliquid quas non assumenda. Voluptates optio quas vel placeat expedita aspernatur ut nam. Distinctio officia adipisci et quasi ipsam consequatur.",
            "body": "Temporibus fuga consequuntur blanditiis eos voluptatibus eos sit. Qui enim facere et. Ut autem quae laboriosam minus ipsum repellendus.",
            "published_at": "2023-01-27T06:19:18.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 1,
                "name": "Ada Torphy",
                "email": "estefania.kulas@example.com",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "952.588.5385",
                "address": "19181 Waters Flat\nFlorenceview, OK 23850-6386",
                "website": "http://schaefer.com/fuga-et-voluptas-modi-velit-optio-exercitationem",
                "company": "Daniel Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 6,
            "author_id": 10,
            "title": "Quibusdam molestiae aut non dolore.",
            "slug": "Quibusdam-molestiae-aut-non-dolore",
            "excerpt": "Doloremque quidem voluptatem et doloribus. Earum modi sed corrupti iste voluptates cum molestias. Libero molestiae illum vitae rerum est. Omnis facilis possimus vel nisi aut sit magni. Nihil placeat quod consequuntur blanditiis dolore iure ut.",
            "body": "Reprehenderit esse aperiam quis architecto et officia qui autem. Fugiat ut sed tenetur sed id et libero numquam. Veniam soluta et earum cumque debitis repellat officia et. Harum quis et quia ut iste velit possimus quam.",
            "published_at": "2022-08-23T19:45:02.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 10,
                "name": "Jamal Heaney",
                "email": "jbosco@example.org",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "1-678-956-6372",
                "address": "8433 Hugh Pine\nNew Assunta, VT 00054",
                "website": "http://schaden.com/",
                "company": "Gislason, Schuster and Larkin",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 7,
            "author_id": 3,
            "title": "Ullam architecto tempore id sed veritatis animi.",
            "slug": "Ullam-architecto-tempore-id-sed-veritatis-animi",
            "excerpt": "Placeat consequatur facilis dignissimos temporibus. Omnis beatae consequatur non nesciunt sunt quod qui. Quasi voluptates quis accusantium voluptas.",
            "body": "Incidunt qui et et sit enim ut est. Ducimus blanditiis dolorem omnis voluptatibus dicta eius libero. Veritatis est aut quia dicta expedita eaque. Non eius doloribus illum mollitia totam quidem nihil sit.",
            "published_at": "2022-10-16T18:23:28.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 3,
                "name": "Mrs. Ciara Kuvalis I",
                "email": "fcole@example.net",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "443-977-6109",
                "address": "1226 Lynch Vista Apt. 815\nSchmidtchester, NH 93363",
                "website": "http://www.towne.info/dicta-ipsa-cumque-quos",
                "company": "Kuphal, Kiehn and Kirlin",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 8,
            "author_id": 4,
            "title": "Laudantium omnis magnam natus sunt iste qui.",
            "slug": "Laudantium-omnis-magnam-natus-sunt-iste-qui",
            "excerpt": "Similique atque et ducimus consequatur est delectus laboriosam. Provident placeat accusantium dolorem vel aliquid laudantium quae. Quaerat magnam aut aut reprehenderit accusamus veritatis ut.",
            "body": "Velit aut voluptatem nisi earum. Aspernatur minus libero est maiores est delectus asperiores voluptatibus. Consectetur voluptas quos rem.",
            "published_at": "2022-12-31T15:19:08.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 4,
                "name": "Lenna Erdman",
                "email": "gleichner.reanna@example.net",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "+18204905340",
                "address": "336 Kasey Creek\nLittelfurt, DE 89487",
                "website": "http://www.jacobi.biz/minima-sit-corrupti-nostrum-nam-velit.html",
                "company": "Schinner-Ritchie",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 9,
            "author_id": 2,
            "title": "Rerum officiis omnis id iste ut.",
            "slug": "Rerum-officiis-omnis-id-iste-ut",
            "excerpt": "Aut tenetur exercitationem hic nobis vel minus expedita iure. Numquam sint nostrum voluptas et aut dolorum sapiente. Aut labore iusto praesentium ipsam modi. Accusantium doloribus quidem culpa velit corporis quaerat.",
            "body": "Fuga incidunt pariatur vitae temporibus voluptas magni omnis. Ut rerum repellat eos tempore. Quis et necessitatibus ut fuga consequatur repudiandae ut.",
            "published_at": "2023-01-19T14:37:16.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 2,
                "name": "Amelia Ankunding",
                "email": "cydney.stokes@example.org",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "(680) 759-3539",
                "address": "6543 Windler Knoll\nRosendotown, WA 72974-1259",
                "website": "http://www.boyle.com/et-assumenda-non-rerum-maiores.html",
                "company": "Weissnat Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 10,
            "author_id": 8,
            "title": "Facere qui dolore rerum molestiae suscipit.",
            "slug": "Facere-qui-dolore-rerum-molestiae-suscipit",
            "excerpt": "Incidunt quis repudiandae porro rerum sunt sed. Ab ex ratione atque. Iste numquam at quibusdam magnam eveniet quo suscipit dolorum.",
            "body": "Placeat animi qui nihil laborum. Tenetur est tempora sapiente et doloremque. Ipsa esse dolores voluptate sit fugit.",
            "published_at": "2022-10-21T00:42:27.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 8,
                "name": "Jaleel Nicolas",
                "email": "reyna.damore@example.com",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "(331) 902-9374",
                "address": "816 Stracke Cliffs\nYasminefurt, MI 07855-6173",
                "website": "http://www.quitzon.com/ut-est-fugiat-tenetur-omnis-cumque-iste-expedita-tempora",
                "company": "Fadel-Parker",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 11,
            "author_id": 6,
            "title": "Voluptatum aut omnis eum minus.",
            "slug": "Voluptatum-aut-omnis-eum-minus",
            "excerpt": "Sit non et voluptatem molestias id impedit inventore. Tempora at consequatur eaque nesciunt iste eaque. Explicabo facere incidunt omnis quas sit mollitia. Voluptatem sapiente quia dolores dicta dolores.",
            "body": "Ipsam repudiandae et laboriosam architecto quo accusantium. Sed dolor minima culpa accusamus alias porro consequatur. Suscipit dolorem non rerum neque nulla mollitia officia.",
            "published_at": "2022-10-22T01:21:12.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 6,
                "name": "Granville White",
                "email": "kiera24@example.com",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "+16033038628",
                "address": "2421 Sage Flat Suite 137\nEast Dewittview, MS 86039-0904",
                "website": "http://www.hahn.biz/",
                "company": "Schiller Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 12,
            "author_id": 6,
            "title": "Sint distinctio ratione vero esse nihil deleniti.",
            "slug": "Sint-distinctio-ratione-vero-esse-nihil-deleniti",
            "excerpt": "Vel corrupti tempore quo quos quam rerum aut unde. Quia vitae ut ut voluptates et aspernatur. Assumenda quisquam repellat soluta totam quia eligendi facere. Sint rem optio necessitatibus repudiandae occaecati.",
            "body": "Aut accusamus dolorem voluptas atque. Natus laudantium qui consequatur et excepturi. Corrupti distinctio incidunt et ratione aliquid suscipit. Necessitatibus aut beatae quaerat ad sunt aut.",
            "published_at": "2023-03-13T19:46:50.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 6,
                "name": "Granville White",
                "email": "kiera24@example.com",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "+16033038628",
                "address": "2421 Sage Flat Suite 137\nEast Dewittview, MS 86039-0904",
                "website": "http://www.hahn.biz/",
                "company": "Schiller Ltd",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
        {
            "id": 13,
            "author_id": 9,
            "title": "Rerum cumque debitis ut est natus placeat.",
            "slug": "Rerum-cumque-debitis-ut-est-natus-placeat",
            "excerpt": "Provident enim quasi voluptate qui. Optio odit nostrum aspernatur aliquid voluptas laborum modi. Quas magnam consequatur nam eum occaecati optio. Deleniti reiciendis est qui maiores. Aut officiis odio veritatis possimus velit beatae quis.",
            "body": "Ut aspernatur ut id dignissimos voluptatibus. Qui consequatur eum aut vel. Totam aut dignissimos suscipit est fugiat. Et quae reprehenderit quos sit non eos a. Dolorem temporibus animi velit quia aspernatur ut aperiam.",
            "published_at": "2022-08-11T06:06:51.000000Z",
            "created_at": "2023-03-14T16:33:41.000000Z",
            "updated_at": "2023-03-14T16:33:41.000000Z",
            "author": {
                "id": 9,
                "name": "Ms. Alanna Wisoky",
                "email": "kzieme@example.net",
                "email_verified_at": "2023-03-14T16:33:40.000000Z",
                "phone": "(947) 884-9723",
                "address": "557 Kieran Cape\nNorth Eliezerstad, WY 21143-0088",
                "website": "http://schulist.com/ad-harum-omnis-sunt-quia-dolorem",
                "company": "Pouros, McClure and Littel",
                "created_at": "2023-03-14T16:33:41.000000Z",
                "updated_at": "2023-03-14T16:33:41.000000Z"
            }
        },
    ]
}
```


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

This application is open-sourced and is licensed under the of [MIT license](https://opensource.org/licenses/MIT).
