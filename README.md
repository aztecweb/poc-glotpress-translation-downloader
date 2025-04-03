# Environment with GlotPress and WP Translation Downloader

## Setup


Install glotpress packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-glotpress install --ignore-platform-reqs
```

Install glotpress traduttore packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-glotpress-traduttore install --ignore-platform-reqs
```

Install example project packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-project install --ignore-platform-reqs
```

Setting up services for glotpress
```
docker compose up -d server-glotpress
```

Access http://localhost/glotpress/projects/ with login and password admin admin.

Setting up services for project
```
docker compose up -d server-project
```

Access http://localhost:8080 with login and password admin admin.

## Other commands

WP-CLI
```
docker compose run --rm -u $(id -u):$(id -g) wp-[glotpress or project] [command]
```

Generate zip of translations (you need to change some translate from panel before)
```
docker compose run --rm -u $(id -u):$(id -g) wp-glotpress cron event run traduttore.generate_zip
```

## Examples
This project has two examples to get translations from glotpress:

- wpackagist-plugin/*: is setting up like a private package (when we have a package/version)
- inpsyde/*: is setting up like a project (when we have a project/version/package)