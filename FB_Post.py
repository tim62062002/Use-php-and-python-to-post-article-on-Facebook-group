import facebook

token = "Put your facebook token here"

import sys

print sys.argv[1]
print sys.argv[2]
print sys.argv[3]

graph = facebook.GraphAPI(token)
graph.put_wall_post(sys.argv[1],{"name":sys.argv[2],"link":sys.argv[3],"caption":sys.argv[3],"description":"Post by TMC"},profile_id='Facebook id')


