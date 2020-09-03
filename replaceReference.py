#!/usr/bin/env python
# coding: utf-8


from glob import glob
import os



pastas = glob(os.getcwd() +'/*/')



for pasta in pastas:
    basedir = os.getcwd()
    nomePasta = pasta.split('/')[-2]
#    print()
#    print(pasta.split('/')[1:-2], pasta.split('/')[-2])
#    print(os.path.splitext(pasta))
#    print(os.path.join(os.path.split(pasta),nomePasta))
#    continue
    try:
        reading_file = open(pasta + "index.html", "r")
    except:
        os.rename(os.path.join(basedir,nomePasta),os.path.join(basedir,'_'+nomePasta))
        continue
    new_file_content = ""
    for line in reading_file:
      stripped_line = line.strip()
      if "http" in stripped_line:
        continue
      new_line = stripped_line.replace('''href="''', '''href="''' + nomePasta + '/')
      new_line = new_line.replace('''src="''', '''src="''' + nomePasta + '/')
      new_file_content += new_line +"\n"
    reading_file.close()

    writing_file = open(pasta + "index.html", "w")
    writing_file.write(new_file_content)
    writing_file.close()


