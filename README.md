# Environment with GlotPress and WP Translation Downloader

## Setup

Setting up services
```
docker compose up -d server
```

Install glotpress packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-glotpress install --ignore-platform-reqs
```

Install example project packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-project install --ignore-platform-reqs
```

Access http://localhost/glotpress/projects/ with login and password admin admin.

## Other commands

WP-CLI
```
docker compose run --rm -u $(id -u):$(id -g) wp [command]
```

Generate zip of translations (you need to change some translate from panel before)
```
docker compose run --rm -u $(id -u):$(id -g) wp cron event run traduttore.generate_zip
```

## Examples
This project has two examples to get translations from glotpress:

- wpackagist-plugin/*: is setting up like a private package (when we have a package/version)
- inpsyde/*: is setting up like a project (when we have a project/version/package)