# 3Dcelo_Test

#Tree Counting Algorithm

This PHP script calculates the total number of visible trees in a given grid of tree heights. It takes a two-dimensional array as input, where each cell contains the height of a tree in the grid.

The algorithm counts the number of trees visible from each of the four directions (left, right, top, and bottom), and then subtracts the number of rows in the grid multiplied by 4 (to account for the trees in the corners being double-counted). The resulting number is the total count of visible trees.

#Usage
To use this script, follow these steps:

Clone or download this repository to your local machine.
Open the file tree_count.php in a text editor or IDE.
Modify the $map variable to contain the grid of tree heights you want to analyze.
Run the script using a PHP interpreter or web server.
