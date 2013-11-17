#/bin/bash

# A list of files that don't need to be in SVN
# 
# Run like: sh svn-plugin-dir/developer/clean-svn.sh svn-plugin-dir/trunk


echo "\nCleaning up svn:$1/trunk..."
echo "================================"

rm -Rv $1/trunk/.hg*
rm -v $1/trunk/readme.md
rm -Rv $1/trunk/tools
rm -Rv $1/trunk/.DS_Store