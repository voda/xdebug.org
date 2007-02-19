<?php $title = "Xdebug: Documentation - Settings"; include "include/header.php"; hits ('xdebug-config'); ?>
		<tr>
			<td>&nbsp;</td>
			<td><span class="serif">
			
<!-- MAIN FEATURE START -->

<span class="sans">XDEBUG EXTENSION FOR PHP | DOCUMENTATION - SETTINGS</span><br />

<?php include "include/menu-docs.php"; ?>

<a name="general"></a>
<span class="sans">GENERAL SETTINGS</span><br />

<dl>
<a name="collect_vars"></a>
<dt>xdebug.collect_vars [boolean] (default: Off) (Xdebug 2)</dt>
<dd>This setting tells Xdebug to gather information about which variables
are used in a certain scope. This analysis can be quite slow as Xdebug has
to reverse engineer PHP's opcode arrays. This setting will not record which
values the different variables have, for that use <a
href="#collect_params">xdebug.collect_params</a>.</dd>

<a name="default_enable"</a>
<dt>xdebug.default_enable [boolean] (default: On)</dt>
<dd>If this setting is On then stacktraces will be shown by default on an error
event. You can disable showing stacktraces from your code with <i><a
href='docs.php#xdebug_disable'>xdebug_disable()</a></i>. As this is one of the
basic functions of Xdebug, it is advisable to leave this setting set to
'On'.</dd>

<a name="extended_info"></a>
<dt>xdebug.extended_info [integer] (default: 1)</dt>
<dd>Controls whether Xdebug should enforce "extended_info" mode for the PHP
parser; this allows Xdebug to do file/line breakpoints with the remote
debugger. When tracing or profiling scripts you generally want to turn off this
option as PHP's generated oparrays will increase with about a third of the size
slowing down your scripts. This setting can not be set in your scripts with
ini_set(), but only in php.ini.</dd>

<a name="manual_url"></a>
<dt>xdebug.manual_url [string] (default: http://www.php.net)</dt>
<dd>This is the base url for the links from the function traces and error
message to the manual pages of the function from the message. It is advisable
to set this setting to use the closest mirror.</dd>

<a name="max_nesting_level"></a>
<dt>xdebug.max_nesting_level [integer] (default: 64 in Xdebug 1, 100 in Xdebug 2)</dt>
<dd>Controls the protection mechanism for infinite recursion protection. The
value of this setting is the maximum level of nested functions that are allowed
before the script will be aborted.</dd>

</dl>

<br />
<a name="disable"></a>
<span class="sans">DISPLAY SETTINGS</span><br />

<dl>
<a name="show_exception_trace"></a>
<dt>xdebug.show_exception_trace [integer] (default: 0) (Xdebug 2)</dt>
<dd>When this setting is set to 1, Xdebug will show a stack trace whenever
an exception is raised - even if this exception is actually caught.</dd>

<a name="show_local_vars"></a>
<dt>xdebug.show_local_vars [integer] (default: 0) (Xdebug 2)</dt>
<dd>When this setting is set to something != 0 Xdebug's generated stack dumps
in error situations will also show all variables in the top-most scope. Beware
that this might generate a lot of information, and is therefore turned off by
default.</dd>

<a name="show_mem_delta"></a>
<dt>xdebug.show_mem_delta [integer] (default: 0)</dt>
<dd>When this setting is set to something != 0 Xdebug's human-readable
generated trace files will show the difference in memory usage between function
calls. If Xdebug is configured to generate computer-readable trace files then
they will always show this information.</dd>

<a name="var_display_max_children"></a>
<dt>xdebug.var_display_max_children [integer] (default: 128) (Xdebug 2)</dt>
<dd>Controls the amount of array children and object's properties are shown
when variables are displayed with either <a
href="docs-functions.php#xdebug_var_dump">xdebug_var_dump()</a> or <a
href="#show_local_vars">xdebug,show_local_vars</a>.</dd>

<a name="var_display_max_data"></a>
<dt>xdebug.var_display_max_data [integer] (default: 512) (Xdebug 2)</dt>
<dd>Controls the maximum string length that is shown
when variables are displayed with either <a
href="docs-functions.php#xdebug_var_dump">xdebug_var_dump()</a> or <a
href="#show_local_vars">xdebug,show_local_vars</a>.</dd>

<a name="var_display_max_depth"></a>
<dt>xdebug.var_display_max_depth [integer] (default: 3) (Xdebug 2)</dt>
<dd>Controls how many nested levels of array elements and object properties are
shown when variables are displayed with either <a
href="docs-functions.php#xdebug_var_dump">xdebug_var_dump()</a> or <a
href="#show_local_vars">xdebug,show_local_vars</a>.</dd>

</dl>

<br />
<a name="tracing"></a>
<span class="sans">TRACING SETTINGS</span><br />

<dl>
<a name="auto_trace"></a>
<dt>xdebug.auto_trace [boolean] (default: Off)</dt>
<dd>When this setting is set to on, the tracing of function calls will be
enabled just before the script is run. This makes it possible to trace code in
the <a
href="http://www.php.net/manual/en/configuration.directives.php#ini.auto-prepend-file">auto_prepend_file</a>.</dd>

<a name="collect_includes"></a>
<dt>xdebug.collect_includes [boolean] (default: On) (Xdebug 2)</dt>
<dd>This setting, defaulting to On, controls whether Xdebug should write the
filename used in include(), include_once(), require() or require_once() to the
trace files.</dd>

<a name="collect_params"></a>
<dt>xdebug.collect_params [boolean] (default: Off)</dt>
<dd><p>This setting, defaulting to Off, controls whether Xdebug should collect
the parameters passed to functions when a function call is recorded in either
the function trace or the stack trace.</p>
<p>The setting defaults to Off because for very large
scripts it may use huge amounts of memory and therefore make it impossible for
the huge script to run. You can most safely turn this setting on, but you can
expect some problems in scripts with a lot of functioncalls and/or huge data
structures as parameters. Xdebug 2 will not have this problem with increased
memory usage, as it will never store this information in memory. Instead it
will only be written to disk. This means that you need to have a look at the
disk usage though.</p></dd>

<a name="collect_return"></a>
<dt>xdebug.collect_return [boolean] (default: Off) (Xdebug 2)</dt>
<dd>This setting, defaulting to Off, controls whether Xdebug should write the
return value of function calls to the trace files.</dd>

<a name="trace_format"></a>
<dt>xdebug.trace_format [integer] (default: 0) (Xdebug 2)</dt>
<dd>The format of the trace file.
<table>
<tr><th>Value</th><th>Description</th></tr>
<tr><td>0</td><td>shows a human readable indented trace file with:
<i>time index</i>, <i>memory usage</i>, <i>memory delta</i> (if the setting <a
href='#show_mem_delta'>xdebug.show_mem_delta</a> is enabled), <i>level</i>, <i>function name</i>,
<i>function parameters</i> (if the setting <a href='#collect_params'>xdebug.collect_params</a> is enabled,
<i>filename</i> and <i>line number</i>.</td></tr>
<tr><td>1</td><td>writes a computer readable format with the following
tab-separated fields: <i>level</i>, <i>function #</i>, <i>function entry (0) or
function exit (1)</i>, <i>time index</i>, <i>memory usage</i>, <i>function
name</i>, <i>user-defined (1) or internal function (0)</i>, <i>name of the
include/require file</i>, <i>filename</i> and <i>line number</i>.</td></tr>
</table>
</dd>

<a name="trace_options"></a>
<dt>xdebug.trace_options [integer] (default: 0) (Xdebug 2)</dt>
<dd>When set to "1" the trace files will be appended to, instead of
being overwritten in subsequent requests.</dd>

<a name="trace_output_dir"></a>
<dt>xdebug.trace_output_dir [string] (default: /tmp) (Xdebug 2)</dt>
<dd>The directory where the tracing files will be written to, make sure that
the user who the PHP will be running as has write permissions to that
directory.</dd>

<a name="trace_output_name"></a>
<dt>xdebug.trace_output_name [string] (default: crc32) (Xdebug 2)</dt>
<dd><p>This setting determines the name of the file that is used to dump
traces into. The name of the file always consists of
"trace." + value + ".xt".  The "value" differs depending on this
setting.</p>

<p>
There are three possible values for this setting:
<dl>
	<dt>crc32</dt>
	<dd>The filename will be appended by the crc32 hash of the current working
	directary. Example: trace.1224514426</dd>
	<dt>timestamp</dt>
	<dd>The filename will be appended by the current time as Unix
	timestamp. Example: trace.1170515030</dd>
	<dt>pid</dt>
	<dd>The base name will be appended by the process ID of the PHP interpreter
	(or Apache child) running the script. Example: trace.30447</dd>
</dl>
</p>
</dd>

</dl>

<br />
<a name="debugger"></a>
<span class="sans">REMOTE DEBUGGER SETTINGS</span><br />

<dl>
<a name="idekey"></a>
<dt>xdebug.idekey [string] (default: *complex*)</dt>
<dd>Controls which IDE Key Xdebug should pass on to the DBGp debugger handler.
The default is based on environment settings. First the environment setting
DBGP_IDEKEY is consulted, then USER and as last USERNAME.  The default is set
to the first environment variable that is found. If none could be found the
setting has as default "".</dd>

<a name="remote_autostart"></a>
<dt>xdebug.remote_autostart [boolean] (default: Off)</dt>
<dd>Normally you need to use a specific HTTP GET/POST variable to start
remote debugging (see <a href="/docs-debugger.php">Debugger Usage</a>). When
this setting is set to "On" Xdebug will always attempt to start a remote
debugging session and try to connect to a client, even if the GET/POST/COOKIE
variable was not present.</dd>

<a name="remote_enable"></a>
<dt>xdebug.remote_enable [boolean] (default: Off)</dt>
<dd>This switch controls whether Xdebug should try to contact a debug client
which is listening on the host and port as set with the settings
'<a href="#remote_host">xdebug.remote_host</a>' and '<a
href="#remote_port">xdebug.remote_port</a>'. If a connection can not be
established the script will just continue as if this setting was Off.</dd>

<a name="remote_handler"></a>
<dt>xdebug.remote_handler [string] (default: gdb in Xdebug 1, dbgp in Xdebug 2)</dt>
<dd>Can be either 'php3' which selects the old <a
href='http://www.php.net/manual/en/debugger.php'>PHP 3 style debugger</a>
output, or 'gdb' which enables the GDB like debugger interface. As there is
currently no bundled client for the PHP 3 style debugger and because it's much
less powerfull then the GDB like one, it is advised to leave this setting to
'gdb'.</dd>
FIXME

<a name="remote_host"></a>
<dt>xdebug.remote_host [string] (default: localhost)</dt>
<dd>Selects the host where the debug client is running, you can either use a
host name or an IP address.</dd>

<a name="remote_log"></a>
<dt>xdebug.remote_log [string] (default: none)</dt>
<dd>If set to a value, it is used as filename to a file to which all remote
debugger communications are logged.</dd>

<a name="remote_mode"></a>
<dt>xdebug.remote_mode [string] (default: req)</dt>
<dd><p>Selects when a debug connection is initiated. This setting can have two
different values:
<dl>
<dt>req</dt>
<dd>Xdebug will try to connect to the
debug client as soon as the script starts.</dd>
<dt>hit</dt>
<dd>Xdebug will only
try to connect to the debug client as soon as an error condition occurs.</dd>
</dl>
</p>
</dd>

<a name="remote_port"></a>
<dt>xdebug.remote_port [integer] (default: 17869 for Xdebug 1.3 or 9000 for Xdebug 2.x)</dt>
<dd>The port to which Xdebug tries to connect on the remote host. As the
bundled debug client only listens at the hardcoded port 9000 (or 17869 for
Xdebug 1.3) it is best to leave this setting unchanged.</dd>
</dl>

<br />
<a name="profiler"></a>
<span class="sans">PROFILER SETTINGS <small>(Xdebug 1)</small></span><br />

<dl>
<dt>xdebug.auto_profile [boolean] (default: Off) (Xdebug 1)</dt>
<dd>This option either enables or disables the automatic initialization of the
profiler at the start of the script. By default, automatic is disabled.</dd>
	
<dt>xdebug.auto_profile_mode [integer] (default: 0) (Xdebug 1)</dt>
<dd>Allows you to specify what kind of output would you like the profiler to
generate, use the integer value used to represent each profiling mode <a
href="docs-profiling.php#retrieve">listed here</a>.</dd>
	
<dt>xdebug.output_dir [string] (default: /tmp) (Xdebug 1)</dt>
<dd>The directory where the profiler output will be written to, make sure that
the user who the PHP will be running as has write permissions to that
directory. The created files will look something like this:
xdebug_[timestamp]_[pid].txt.</dd>

<br />
<a name="profiler2"></a>
<span class="sans">PROFILER SETTINGS <small>(Xdebug 2)</small></span><br />
<a name="profiler_append"</a>
<dt>xdebug.profiler_append [integer] (default: 0) (Xdebug 2)</dt>
<dd>When this setting is set to 1, profiler files will not be overwritten when
a new request would map to the same file (depnding on the <a
href='#profiler_output_name'>xdebug.profiler_output_name</a> setting.
Instead the file will be appended to with the new profile.</dd>

<a name="profiler_enable"></a>
<dt>xdebug.profiler_enable [integer] (default: 0) (Xdebug 2)</dt>
<dd>Enables Xdebug's profiler which creates files in the <a
href='#profiler_output_dir'>profile output directory</a>.  Those files can be
read by KCacheGrind to visualize your data.  This setting can not be set in
your script with ini_set().</dd>

<a name="profiler_enable_trigger"></a>
<dt>xdebug.profiler_enable_trigger [integer] (default: 0) (Xdebug 2)</dt>
<dd>When this setting is set to 1, you can trigger the generation of profiler
files by using the XDEBUG_PROFILE GET/POST parameter. This will then write the
profiler data to <a href="#profiler_output_dir">defined directory</a>.</dd>

<a name="profiler_output_dir"></a>
<dt>xdebug.profiler_output_dir [string] (default: /tmp) (Xdebug 2)</dt>
<dd>The directory where the profiler output will be written to, make sure that
the user who the PHP will be running as has write permissions to that
directory. This setting can not be set in your script with ini_set().</dd>

<a name="profiler_output_name"></a>
<dt>xdebug.profiler_output_name [string] (default: crc32) (Xdebug 2)</dt>
<dd><p>This setting determines the name of the file that is used to dump profiling
information into. The name of the file always consists of "cachegrind.out.".
This name can be prepended and appended depending on this setting.</p>

<p>
There are four possible values for this setting:
<dl>
	<dt>crc32</dt>
	<dd>The filename will be appended by the crc32 hash of the current working
	directory. Example: cachegrind.out.1224514426</dd>
	<dt>timestamp</dt>
	<dd>The filename will be appended by the current time as Unix
	timestamp. Example: cachegrind.out.1170515030</dd>
	<dt>script</dt>
	<dd>The base name will be prepended by a sanitized version of the full
	path to the script's file name. Example: tmp_foo_php_cachegrind.out</dd>
	<dt>pid</dt>
	<dd>The base name will be appended by the process ID of the PHP interpreter
	(or Apache child) running the script. Example: cachegrind.out.30447</dd>
</dl>
</p>
</dd>

</dl>

<br />
<a name="superglobal"></a>
<span class="sans">SUPERGLOBAL DUMPING SETTINGS</span><br />

<dl>
<dt>xdebug.dump.COOKIE [string] (default: Empty)<br />
xdebug.dump.ENV [string] (default: Empty)<br />
xdebug.dump.FILES [string] (default: Empty)<br />
xdebug.dump.GET [string] (default: Empty)<br />
xdebug.dump.POST [string] (default: Empty)<br />
xdebug.dump.REQUEST [string] (default: Empty)<br />
xdebug.dump.SERVER [string] (default: Empty)<br />
xdebug.dump.SESSION [string] (default: Empty)</dt>
<dd>These seven settings control which data from the superglobals is shown when
an error situation occurs. Each php.ini setting can consist of a comma
seperated list of variables from this superglobal to dump, but make sure you do
not add spaces in this setting. In order to dump the REMOTE_ADDR and the
REQUEST_METHOD when an error occurs, add this setting:
<pre>
xdebug.dump.SERVER = REMOTE_ADDR,REQUEST_METHOD
</pre>
</dd>

<dt>xdebug.dump_once [boolean] (default: On)</dt>
<dd>Controls whether the values of the superglobals should be dumped on all
error situations (set to Off) or only on the first (set to On).</dd>

<dt>xdebug.dump_undefined [boolean] (default: Off)</dt>
<dd>If you want to dump undefined values from the superglobals you should set
this setting to On, otherwise leave it set to Off.</dd>
</dl>

<br /><br />

<!-- MAIN FEATURE END -->

			</span></td>
			<td>&nbsp;</td>
			<td>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>
<?php include "include/side.php"; ?>
						</td>
					</tr>
				</table>
			</td>
			<td>&nbsp;</td>
		</tr>
<?php include "include/footer.php"; ?>
