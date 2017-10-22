#!/bin/bash

phpmd . html cleancode,codesize,controversial,design,naming,unusedcode --reportfile phpmd.html --exclude vendor --suffixes php --ignore-violations-on-exit
