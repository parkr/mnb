# -*- encoding: utf8 -*-

import string, re, cgi
from datetime import datetime

def parse_listing_into_sql(filename):
	f = open(filename, "rb")
	current_show_id = 0
	for i, line in enumerate(f.readlines()):
		if line.strip().split(" ")[0] in ["January", "Jan", "February", "Feb", "March", "Mar", "April", "Apr", "May", "June", "July", "August", "Aug", "September", "Sept", "Sep", "October", "Oct", "November", "Nov", "December", "Dec"]:
			# a show
			current_show_id = current_show_id + 1
			line = line.strip().translate(string.maketrans("", ""), string.punctuation)
			try:
				dateobj = datetime.strptime(line, "%B %d")
			except(ValueError):
				dateobj = datetime.strptime(line, "%b %d")
			if dateobj.month >= 1 and dateobj.month <= 6:
				dateobj = dateobj.replace(year=2012)
			else:
				dateobj = dateobj.replace(year=2011)
			print "INSERT INTO shows (id, name, date) VALUES (%d, '%s', '%s');" % (current_show_id, cgi.escape(line.strip()), dateobj.strftime("%Y-%m-%d"))
		if ' - ' in line or ' – ' in line:
			# a track
			line = re.sub(" – ", " - ", line.strip())
			artist = cgi.escape(line[0:line.find(" - ")])
			title = cgi.escape(line[line.find(" - ")+3:])
			
			print "INSERT INTO track_listings (show_id, title, artist, date_added) VALUES (%d, \"%s\", \"%s\", NOW());" % (current_show_id, title, artist)

if __name__ == "__main__":
	parse_listing_into_sql("initial_track_listing.txt")