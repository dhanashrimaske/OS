FROM python:3.9

WORKDIR /app

COPY . /app

RUN pip install --no-cache-dir Django


EXPOSE 6000

CMD ["python", "manage.py", "runserver", "0.0.0.0:6000"]
