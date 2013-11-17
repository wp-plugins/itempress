#/bin/sh

# Updates the readme from trunk to tag
# 
# Use like: sh itempress-develop/tools/update-readme.sh svn-dir 0.2
# 
# This will copy svn-dir/trunk/readme.txt to svn-dir/tags/0.2/readme.txt and update SVN

echo "\nUpdating svn:trunk/readme.txt to svn:/tags/$2/readme.txt"
echo "==============================="

cp -v "$1/trunk/readme.txt" "$1/tags/$2/readme.txt"

echo "\nCommitting: Updating svn:trunk/readme.txt to svn:/tags/$2/readme.txt"
echo "==============================="

svn ci -m "Updating svn:trunk/readme.txt to svn:/tags/$2/readme.txt" $1