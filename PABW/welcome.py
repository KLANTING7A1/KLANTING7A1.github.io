from fastapi import FastAPI
import pandas

app = FastAPI()


@app.get("/")
async def root():
    return {"message": "KLANTING 7A1"}

@app.get("/json")
def build_results():
    df = pandas.read_json("Cars.json").T.to_dict()
    return df

@app.get("/csv")
def build_results():
    df = pandas.read_csv("Cars.csv").T.to_dict()
    return df

@app.get("/xml")
def build_results():
    df = pandas.read_xml("Cars.xml").T.to_dict()
    return df