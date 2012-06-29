echo "enter year and quarter (ie: 2011 winter)"
read year quarter

php -f update.php $year $quarter
