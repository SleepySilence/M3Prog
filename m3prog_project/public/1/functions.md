strtoupper — Make a string uppercase
Parameters
string
The input string.
Returns the uppercased string.

strpos — Find the position of the first occurrence of a substring in a string
haystack,needle and offset
Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset). Also note that string positions start at 0, and not 1.
Returns false if the needle was not found.

file_exists — Checks whether a file or directory exists
Parameters
filename
Path to the file or directory.
On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.
Return Values
Returns true if the file or directory specified by filename exists; false otherwise.