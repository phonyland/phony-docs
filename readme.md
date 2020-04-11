<div align="center">

[![Phony Logo](https://raw.githubusercontent.com/phony-php/phony/master/.github/asset/phony-logo.png)](https://github.com/phony-php/phony-docs)

</div>

<div align="center">

# Phony `PHP` Faker Documentation

</div>

## Developing

**Phony** uses the [Jigsaw](http://jigsaw.tighten.co/) static site generator for its documentation.
Here is how you can generate the documentation locally:

1. Go to your `phony-docs` folder

    ```sh
    cd docs
    ```

2. Install `JS` dependencies

    ```sh
    npm install
    ```

3. Install `PHP` dependencies for docs (requires Composer: https://getcomposer.org)

    ```sh
    composer install
    ```

4. Run the build to generate the static site

    ```sh
    npm run dev
    ```

5. View the static site at `/build_local`, or you can run the Jigsaw server:

    ```sh
    ./vendor/bin/jigsaw serve
    ```