
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="templates/style/bootstrap.min.css" type="text/css"/>
	</head>
	<body>

<?php
  include ("include.php");
    include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome'];
?>

<ol class="breadcrumb">
  <li><a href="control_panel.php">Control Panel</a></li>
  <li class="active">Activity Logs</li>
</ol>

    <div class="panel panel-default">
    <div class="panel-heading">Activity Logs</div>
    <div class="panel-body">
    <table class="table table-bordered"><tr><th>User IP</th><th>Action</th><th>Username</th><th>Time</th></tr><tr><td>128.77.13.96</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 12:44:30
          </td></tr><tr><td>87.61.126.74</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 12:56:42
          </td></tr><tr><td>79.84.225.135</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:02:06
          </td></tr><tr><td>186.222.214.203</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:02:37
          </td></tr><tr><td>141.135.105.148</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:16:55
          </td></tr><tr><td>95.90.209.64</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:21:43
          </td></tr><tr><td>95.180.152.100</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:32:52
          </td></tr><tr><td>147.252.145.136</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:46:25
          </td></tr><tr><td>216.214.199.142</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:48:19
          </td></tr><tr><td>149.172.186.31</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:49:58
          </td></tr><tr><td>79.70.13.2</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 13:58:22
          </td></tr><tr><td>83.55.78.223</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:06:13
          </td></tr><tr><td>46.39.231.112</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:25:22
          </td></tr><tr><td>104.223.94.66</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:40:24
          </td></tr><tr><td>83.31.241.18</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:47:45
          </td></tr><tr><td>2.120.39.54</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:50:13
          </td></tr><tr><td>177.13.225.19</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 14:51:25
          </td></tr><tr><td>201.33.68.131</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 15:02:07
          </td></tr><tr><td>77.166.169.159</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 15:08:26
          </td></tr><tr><td>101.100.137.224</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 15:58:05
          </td></tr><tr><td>88.179.29.53</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:02:14
          </td></tr><tr><td>37.228.228.119</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:08:12
          </td></tr><tr><td>109.192.61.58</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:08:31
          </td></tr><tr><td>88.179.29.53</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:16:05
          </td></tr><tr><td>95.246.253.157</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:18:27
          </td></tr><tr><td>89.142.40.197</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:42:25
          </td></tr><tr><td>200.133.218.11</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 16:56:37
          </td></tr><tr><td>23.31.16.97</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 17:23:35
          </td></tr><tr><td>41.248.228.215</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 17:26:54
          </td></tr><tr><td>60.48.253.178</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 17:38:52
          </td></tr><tr><td>190.211.108.57</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 18:15:13
          </td></tr><tr><td>116.118.110.171</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 19:33:06
          </td></tr><tr><td>41.221.193.173</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 19:35:36
          </td></tr><tr><td>73.139.235.19</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 20:27:47
          </td></tr><tr><td>95.15.194.184</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 20:56:30
          </td></tr><tr><td>188.235.50.202</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 21:23:45
          </td></tr><tr><td>107.167.108.172</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 21:59:34
          </td></tr><tr><td>77.22.100.53</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 22:41:24
          </td></tr><tr><td>59.162.178.146</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 22:41:45
          </td></tr><tr><td>131.108.230.25</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 23:36:38
          </td></tr><tr><td>112.196.41.178</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 23:37:59
          </td></tr><tr><td>78.25.123.78</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-17 23:57:15
          </td></tr><tr><td>160.83.96.83</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 00:02:10
          </td></tr><tr><td>14.184.183.214</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 00:12:18
          </td></tr><tr><td>111.125.208.239</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 00:12:55
          </td></tr><tr><td>151.250.59.102</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 00:27:09
          </td></tr><tr><td>217.7.209.196</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 00:46:10
          </td></tr><tr><td>180.124.94.175</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 01:00:07
          </td></tr><tr><td>175.157.61.219</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 01:21:07
          </td></tr><tr><td>171.246.124.197</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 01:44:12
          </td></tr><tr><td>212.71.154.170</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 02:29:08
          </td></tr><tr><td>147.252.138.32</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 02:56:43
          </td></tr><tr><td>171.49.165.195</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 03:02:55
          </td></tr><tr><td>195.14.170.242</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 03:33:01
          </td></tr><tr><td>147.252.136.174</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 03:46:00
          </td></tr><tr><td>147.252.138.37</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 03:46:06
          </td></tr><tr><td>176.22.137.133</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 03:49:23
          </td></tr><tr><td>24.135.96.175</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 04:11:18
          </td></tr><tr><td>78.163.142.180</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 04:13:38
          </td></tr><tr><td>171.49.165.195</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 04:40:12
          </td></tr><tr><td>109.193.78.175</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 04:46:42
          </td></tr><tr><td>87.3.14.176</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 04:47:13
          </td></tr><tr><td>176.36.231.41</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 05:00:47
          </td></tr><tr><td>49.228.227.150</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 05:03:17
          </td></tr><tr><td>43.225.160.71</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 05:03:33
          </td></tr><tr><td>123.20.16.139</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:23:42
          </td></tr><tr><td>112.168.167.14</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:27:47
          </td></tr><tr><td>191.34.78.20</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:39:47
          </td></tr><tr><td>147.252.136.197</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:41:14
          </td></tr><tr><td>147.252.136.197</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:44:08
          </td></tr><tr><td>103.60.172.162</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:44:33
          </td></tr><tr><td>5.108.154.108</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:45:15
          </td></tr><tr><td>147.252.136.197</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 06:48:58
          </td></tr><tr><td>88.255.175.179</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 07:26:48
          </td></tr><tr><td>197.251.240.210</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 07:51:29
          </td></tr><tr><td>78.162.22.233</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 07:58:26
          </td></tr><tr><td>92.167.120.88</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 08:20:47
          </td></tr><tr><td>95.90.244.62</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 08:45:19
          </td></tr><tr><td>191.34.78.20</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 08:57:54
          </td></tr><tr><td>117.193.149.81</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 09:12:05
          </td></tr><tr><td>82.240.232.239</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 09:25:38
          </td></tr><tr><td>178.42.155.163</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 10:03:11
          </td></tr><tr><td>41.210.37.75</td><td>User logging into control panel.</td><td>admin</td><td>2016-11-18 10:04:58
          </td></tr>    </table>
    </div>
    </div>
    </div>
 <?php

    include("footer.php");

 ?>
</body>
</html>