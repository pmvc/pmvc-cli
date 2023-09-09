#!/usr/bin/env sh

DIR="$(
  cd "$(dirname "$0")"
  pwd -P
)"
MY_PWD=$(pwd)

cli='env docker run --rm -it'
cli+=" -v $DIR/bin:/.composer/vendor/pmvc/pmvc-cli/bin"
cli+=" -v $MY_PWD:/var/www/html"
cli+=" allfunc/pmvc-phpunit sh"

sh -c "$cli";
