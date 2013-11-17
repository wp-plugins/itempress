#/bin/bash

# Helps an SVN committer sync itempress-develop with SVN
# 
# Run like: sh itempress-develop/committers/sync-svn itempress-develop svn-plugin-dir <Latest Stable Tag:#.#> <Optional Commit message>

echo "\nSyncing dev:$1 with svn:$2/trunk..."
echo "================================"

rsync -rav $1 "$2/trunk"

# Run a cleanup

echo "\nRunning cleanup..."
echo "================================"

sh $1/tools/clean-svn.sh $2

echo "\nCommitting svn:$2/trunk"
echo "================================"

svn ci -m "Committing svn:$2/trunk $4" $2

echo "\nUpdating svn:trunk/readme.txt to svn:tags/$2/readme.txt"
echo "================================"

sh $1/tools/update-readme.sh $2 $3