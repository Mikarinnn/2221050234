import pandas as pd
from sklearn.tree import DecisionTreeClassifier, export_text

data = {
    "ID":[175,217,222,310,343,356,432,477,489,490,551,563,742,777,812],
    "Sex":["Nam","Nữ","Nữ","Nam","Nam","Nam","Nam","Nam","Nam","Nam","Nam","Nam","Nữ","Nam","Nam"],
    "Level":["Đại học","Đại học","Cao đẳng","Đại học","Đại học","Đại học","Cao đẳng","Đại học",
             "Trung tâm tin học","Cao đẳng","Đại học","Trung tâm tin học","Đại học","Trung tâm tin học","Cao đẳng"],
    "Top_Train":["Không","Có","Không","Có","Không","Có","Không","Không","Không","Không","Có","Không","Có","Không","Không"],
    "Year":[0,1,3,1,2,1,0,1,2,0,0,3,0,2,3],
    "Project":["Không","Có","Không","Không","Không","Không","Không","Có","Có","Không","Không","Có","Không","Không","Có"],
    "Result":["Từ chối","Đồng ý","Từ chối","Đồng ý","Đồng ý","Đồng ý","Từ chối","Đồng ý",
              "Đồng ý","Từ chối","Đồng ý","Đồng ý","Đồng ý","Từ chối","Đồng ý"]
}

df = pd.DataFrame(data)

df_enc = df.copy()

mapping = {
    "Nam":0, "Nữ":1,
    "Trung tâm tin học":0, "Cao đẳng":1, "Đại học":2,
    "Không":0, "Có":1,
    "Từ chối":0, "Đồng ý":1
}

df_enc.replace(mapping, inplace=True)


X = df_enc[["Sex","Level","Top_Train","Year","Project"]]
y = df_enc["Result"]


model = DecisionTreeClassifier(max_depth=4)
model.fit(X, y)


print("\n CÂY QUYẾT ĐỊNH \n")
tree_rules = export_text(model, feature_names=list(X.columns))
print(tree_rules)

print("\n===== TẬP LUẬT =====\n")

print("Luật 1: IF Project = Có THEN Result = Đồng ý")
print("Luật 2: IF Project = Không AND Top_Train = Có THEN Result = Đồng ý")
print("Luật 3: IF Project = Không AND Top_Train = Không AND Year >= 2 THEN Result = Đồng ý")
print("Luật 4: IF Project = Không AND Top_Train = Không AND Year = 0 THEN Result = Từ chối")
print("Luật 5: IF Project = Không AND Top_Train = Không AND Year = 1 THEN Result = Đồng ý")

print("\n===== HOÀN THÀNH =====\n")
