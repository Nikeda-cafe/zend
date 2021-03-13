<?php
move_uploaded_file($_FILES['uploaded']['tmp_name'],
  './doc/'.$_FILES['uploaded']['name']);
print('アップロードに成功しました。');
