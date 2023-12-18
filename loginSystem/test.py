from pypdf import PdfReader

reader = PdfReader("docx/result.pdf")
number_of_pages = len(reader.pages)
page = reader.pages[1]
text = page.extract_text()
print(number_of_pages)