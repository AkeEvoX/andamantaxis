<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BackEnd</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
        <div id="navigation">
            <div id="userInfo">
                <span>Welcome: </span><span>Admin </span><a href="index.php">Logout</a>
            </div>
            <div id="menuBar">
                <span>Menu: </span><a href="">News</a> | <a href="">Control System</a> | <a href="">Player</a> | <a href="">Position</a> | <a href="">Admin</a>
            </div>
            <hr>
        </div>
        <div>
            <table id="dataTable">
                <tr class="headTable">
                    <td class="textCenter">No</td>
                    <td>Topic</td>
                    <td>Date</td>
                    <td class="textCenter">Status</td>
                    <td class="textCenter" colspan="2"><a href="">Add New</a></td>
                </tr>
                <tr class="even">
                    <td class="textCenter">00004</td>
                    <td>Kayne Vincent</td>
                    <td>01 November 2014</td>
                    <td class="textCenter">Active</td>
                    <td class="textCenter"><a href="">Update</a></td>
                    <td class="textCenter"><a href="">Delete</a></td>
                </tr>
                <tr class="odd">
                    <td class="textCenter">00003</td>
                    <td>Deniel Cortes</td>
                    <td>01 November 2014</td>
                    <td class="textCenter">Active</td>
                    <td class="textCenter"><a href="">Update</a></td>
                    <td class="textCenter"><a href="">Delete</a></td>
                </tr>
                <tr class="even">
                    <td class="textCenter">00002</td>
                    <td>Kayne Vincent</td>
                    <td>01 November 2014</td>
                    <td class="textCenter">Active</td>
                    <td class="textCenter"><a href="">Update</a></td>
                    <td class="textCenter"><a href="">Delete</a></td>
                </tr>
                <tr class="odd">
                    <td class="textCenter">00001</td>
                    <td>Deniel Cortes</td>
                    <td>01 November 2014</td>
                    <td class="textCenter">Active</td>
                    <td class="textCenter"><a href="">Update</a></td>
                    <td class="textCenter"><a href="">Delete</a></td>
                </tr>
                <tr class="footTable">
                    <td colspan="4">
                        <p>Page: 1 | 2</p>
                        <p>Total: 2 Record</p>
                    </td>
                    <td class="textCenter" colspan="2">
                        Table:News
                    </td>
                 </tr>   
            </table>
            <hr>
         <table id="postTable">
                <tr cos class="headTable">
                    <td class="postHead textCenter" colspan="2">Update ID:#00001 For Table:News</td>
                </tr>
                <tr class="headTable">
                    <td class="topic textCenter">Topic</td>
                    <td class="whiteBG"><input class="inputField"></td>
                </tr>
                <tr class="headTable">
                    <td class="topic textCenter">Massage</td>
                    <td class="whiteBG"><textarea class="massageField"></textarea></td>
                </tr>
                 <tr class="headTable">
                    <td class="topic textCenter">Photo</td>
                    <td class="whiteBG">
                    	<img  class="uploadPic" src="../img/display.jpg">
                        <input type="checkbox">Delete Photo
                    	<div><button>Browns</button></div>
                    </td>
                    
                </tr>
                <tr class="headTable">
                    <td class="topic textCenter">Date</td>
                    <td class="whiteBG"><input class="inputField"></td>
                </tr>
                <tr class="headTable">
                    <td class="topic textCenter">Status</td>
                    <td class="whiteBG">
                    	<select name="cars">
                            <option>Active</option>
                            <option>Deactive</option>
                        </select>
                     </td>
                </tr>
                <tr class="headTable">
                	<td class="textCenter" colspan="2"><button>Save</button></td>
                </tr>
    	</table>
        </div>
    </div>
</body>
</html>
