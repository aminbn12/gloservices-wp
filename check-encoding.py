import os

theme_dir = r"c:\xampp\htdocs\gloservices-wp-theme"
fp_path = os.path.join(theme_dir, "front-page.php")
tr_path = os.path.join(theme_dir, "translations.php")

with open(fp_path, "r", encoding="utf-8") as f:
    fp_content = f.read()

with open(tr_path, "r", encoding="utf-8") as f:
    tr_content = f.read()

# Let's find "DÉCOUVREZ" in both contents
import re
fp_match = re.search(r"D[É\w\s]+NOS\s+SOLUTIONS", fp_content)
tr_match = re.search(r"D[É\w\s]+NOS\s+SOLUTIONS", tr_content)

if fp_match:
    print("Found in front-page.php:", repr(fp_match.group(0)))
    print("Codepoints:", [ord(c) for c in fp_match.group(0)])
else:
    print("Not found in front-page.php")

if tr_match:
    print("Found in translations.php:", repr(tr_match.group(0)))
    print("Codepoints:", [ord(c) for c in tr_match.group(0)])
else:
    print("Not found in translations.php")
