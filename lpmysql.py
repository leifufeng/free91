# -*- coding:utf-8 -*-
#encoding:utf8

import pymysql

# PyMySql模块增删查改基本操作
# http://blog.csdn.net/u013166622/article/details/50789945

class _pmysql():
    # 构造函数
    def __init__(self):
      self.conn = pymysql.connect(host='127.0.0.1',
                               port=3306,
                               user='root',
                               passwd='root',
                               db='91pron01',
                               charset='utf8')
      # print(dir(self.conn))
    def conf(self):
        conn = pymysql.connect(host='127.0.0.1',
                               port=3306,
                               user='root',
                               passwd='root',
                               db='91pron01',
                               charset='utf8')

        return conn
    # 查询
    def select(self,sql):
        conn = self.conf()

        cursor = conn.cursor()
        sedata = cursor.execute(sql)

        # sedata=cursor.execute("select * from imgs")
        # print(sedata)sedata是数据条数
        # for i in cursor:
        #     cursor.rownumber
        #     print(i)在这里i是查询返回的数据


        # 获取剩余结果的第一行数据
        # row_1 = cursor.fetchone()
        # print(row_1)

        # 获取剩余结果前n行数据
        # row_2 = cursor.fetchmany(3)
        # print(row_2)

        # 获取剩余结果所有数据
        row_3 = cursor.fetchall()

        conn.commit()
        cursor.close()
        conn.close()
        return row_3

    ##插入
    def insert(self,sql):
        conn = self.conf()
        cur = conn.cursor()
        # sql= "INSERT INTO user (Name,Password) VALUES ('"+name+"','"+pwd+"')"
        print(sql)
        sta=cur.execute(sql)
        # if sta==1:
        #     print('Done')
        # else:
        #     print('Failed')
        conn.commit()
        cur.close()
        conn.close()
        return sta

    ##更新
    def update(self,sql):
        conn = self.conf()
        cur = conn.cursor()
        # sql= "UPDATE USER SET PASSWORD='"+pwd+"' WHERE NAME='"+name+"'"
        print(sql)
        sta=cur.execute(sql)
        # if sta==1:
        #     print('Done')
        # else:
        #     print('Failed')
        conn.commit()
        cur.close()
        conn.close()
        return sta

    ##删除
    def delete(self,sql):
        conn = self.conf()
        cur = conn.cursor()
        # sql = "DELETE FROM USER WHERE Name='"+name+"'"
        print(sql)
        sta=cur.execute(sql)
        # if sta==1:
        #     print('Done')
        # else:
        #     print('Failed')
        conn.commit()
        cur.close()
        conn.close()
        return sta


lpmysql = _pmysql()




# for i in pymysql:
#     print(i)
# sql = "select imgid from imgs WHERE imgId = 88775"
# data = select(sql)
# print(data)
# print(len(data))