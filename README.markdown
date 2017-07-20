# Parse File Paths #

Parses {filedir_X} variables. Works great with query module and activerecord plugin, and any other add-on that outputs raw channel data.

## Installation

* Copy all files to /system/user/addons/parse_file_paths

## Usage
	{exp:query sql="SELECT field_id_1 AS file FROM exp_channel_data"}
	{exp:parse_file_paths}
		{file}
	{/exp:parse_file_paths}
	{/exp:query}