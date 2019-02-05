#!/usr/bin/env bash

export WWWUSER=${WWWUSER:-$UID}

COMPOSE="docker-compose -f docker-compose.yml"


if [[ "$1" == "-v" ]]; then
      shift 1
      $COMPOSE run --rm \
               cli \
               php -v

 elif [[ "$1" == "run" ]]; then
      shift 1
      $COMPOSE run --rm \
               cli \
               php ./code/"$@"

  fi